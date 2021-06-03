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
        $booking = DB::table('bookings')->get()->last();  
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

        // if (empty(Request::get('PayerID')) || empty(Request::get('token'))) {
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
        // var_dump($result); die();
        if ($result->getState() == 'approved') {

            Session::put('success', 'Payment success');
            return Redirect::to('/paypal_payment');

        }

        Session::put('error', 'Payment failed');
        $getLastInvoiceNumber = DB::table('bookings')->orderBy('id', 'desc')->limit(1)->delete();
        return Redirect::to('/paypal_payment');

    }

}
