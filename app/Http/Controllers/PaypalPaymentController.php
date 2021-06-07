<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use Illuminate\Support\Facades;
/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Config;

use Illuminate\Support\Facades\DB;

class PaypalPaymentController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        /** PayPal api context **/
        $paypal_conf = Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }
    public function index()
    {
        $booking = DB::table('temporary_bookings')->get()->last();  
        $grand_total =  $booking->grand_total;
        $pick_up_datetime =  $booking->pick_up_datetime;
        $drop_off_datetime =  $booking->drop_off_datetime;

        $car_data = DB::table('modules_data')->select("title","image")->where('title',$booking->car_name)->get()[0];
   
        return view('payment.paypal', compact('car_data','grand_total','pick_up_datetime','drop_off_datetime'));
    }
    public function payWithpaypal(Request $request)
    {       
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();

        $item_1->setName('Item 1') /** item name **/
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount')); /** unit price **/

        $item_list = new ItemList();
        $item_list->setItems(array($item_1));

        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($request->get('amount'));

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('status')) /** Specify return URL **/
            ->setCancelUrl(URL::to('status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        /** dd($payment->create($this->_api_context));exit; **/
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {
            

            if (Config::get('app.debug')) {

                Session::put('error', 'Connection timeout');
                return Redirect::to('/paypal_payment');
              

            } else {

                Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/paypal_payment');            

            }

        }

        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }

        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {

            /** redirect to paypal **/
            return Redirect::away($redirect_url);

        }

        Session::put('error', 'Unknown error occurred');
        return Redirect::to('/paypal_payment');

    }

    public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');

        if (empty($request->PayerID) || empty($request->token)) {
            Session::put('error', 'Payment failed');
            return Redirect::to('/paypal_payment');

        }
        // if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

        //     Session::put('error', 'Payment failed');
        //     return Redirect::to('/');

        // }
        $payment = Payment::get($payment_id, $this->_api_context);  
        $execution = new PaymentExecution();
        // $execution->setPayerId(Input::get('PayerID'));
        $execution->setPayerId($request->PayerID);

        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {

            Session::put('success', 'Payment success');

            $booking = DB::table('temporary_bookings')->get()->last();  
            DB::table('bookings')->insert([
                'car_name' => $booking->car_name,
                'pick_up' => $booking->pick_up,
                'pick_up_lat' => $booking->pick_up_lat,
                'pick_up_lng' => $booking->pick_up_lng,
                'pick_up_datetime' => $booking->pick_up_datetime,
                'drop_off' => $booking->drop_off,
                'drop_off_lat' => $booking->drop_off_lat,
                'drop_off_lng' => $booking->drop_off_lng,
                'drop_off_datetime' => $booking->drop_off_datetime,
                'name' => $booking->name,            
                'email' => $booking->email,
                'phone' => $booking->phone,
                'address' => $booking->address,
                'city' => $booking->city,
                'state' => $booking->state,
                'country' => $booking->country,
                'payment_method' => $booking->payment_method,
                'following_product_1' => $booking->following_product_1,
                'following_product_2' => $booking->following_product_2,
                'following_product_3' => $booking->following_product_3,
                'following_product_4' => $booking->following_product_4,
                'following_product_5' => $booking->following_product_5,
                'following_product_6' => $booking->following_product_6,
                'insurance_1' => $booking->insurance_1,
                'insurance_2' => $booking->insurance_2,
                'insurance_3' => $booking->insurance_3,
                'grand_total' => $booking->grand_total,
            ]);
    
            return Redirect::to('/paypal_payment');

        }

        Session::put('error', 'Payment failed');
        //$getLastInvoiceNumber = DB::table('bookings')->orderBy('id', 'desc')->limit(1)->delete();
        return Redirect::to('/paypal_payment');

    }

}
