<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact_us;

class ContactusController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin');
    }

    /**
     * Show the Admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $messages = Contact_us::orderBy('id','desc')->get();
        return view('admin.contact_us.index')->with('messages',$messages);
    }

    public function detail($id){
        $message = Contact_us::findorFail($id);
        $message->status = 'seen';
        $message->update();
        return view('admin.contact_us.detail')->with('message',$message);
    }
}
