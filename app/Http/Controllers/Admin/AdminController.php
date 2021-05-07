<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact_us;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
    public function home() {
         $data['admins'] = Admin::get();
         $data['booking_count'] = DB::table("bookings")->get()->count();
        return view('admin.home')->with('data',$data);
    }

    public function index() {
        $data['admins'] = Admin::get();
        return view('admin.admins.index')->with($data);
    }

    public function add() {
        return view('admin.admins.add');
    }

    public function edit($id) {
        $data = array();
        $data['admin'] = Admin::findorFail($id);
        return view('admin.admins.edit')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:admins|max:255',
            'password' => 'required|confirmed',
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'password.required' => 'Password is required.',
        ]);
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();
        if ($admin->save() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'Admin has been successfully Created!');
        }
        return redirect(route('admin.admins'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ], [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
        ]);
        $admin = Admin::findOrFail($request->id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if($request->password){
          $admin->password = Hash::make($request->password);  
        }
        
        
        $admin->update();
        if ($admin->update() == true) {
            $request->session()->flash('message.added', 'success');
            $request->session()->flash('message.content', 'Admin has been successfully Updated!');
        }
        return redirect(route('admin.admins'));
    }

    public function destroy(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        $request->session()->flash('message.added', 'success');
        $request->session()->flash('message.content', 'Admin has been successfully Deleted!');
        return redirect(route('admin.admins'));
    }
}
