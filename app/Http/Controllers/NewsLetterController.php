<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Newsletter;





class NewsLetterController extends Controller

{

    public function store(Request $request)

    {

       $this->validate($request, [

            'email' => 'required',

        ], [

            'email.required' => 'Email Address is required.',

        ]);



        $newsletter = new Newsletter();

        $newsletter->email = $request->email;

        $newsletter->save(); 

    }

}

