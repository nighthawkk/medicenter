<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ContactController extends Controller
{


    public function show()
    {
        return view('contact_us');
    }

    public function store(Requests\ContactFormRequest $request)
    {

        $email = Input::get('email');
        $first_name = Input::get('first_name');
        $user_message = $request->get('message');


        \Mail::send('emails.contact',['email'=>$email, 'first_name'=>$first_name,'user_message' => $user_message] , function($message) use ($email,$first_name,$user_message)
            {
                $message->from( $email , $first_name);
                $message->to('contactmedicenter@gmail.com', 'Admin')->subject('CONTACT US');
            });



        return \Redirect::route('contact')
            ->with('message', 'Thanks for contacting us!');

    }



}