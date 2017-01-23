<?php

namespace App\Http\Controllers\Auth;

use App\medicine;
use App\Pub;
use App\ShoppingCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Http\Controllers\Controller;
use App\Http\Requests;


class PubController extends Controller
{




    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'max:10',
            'mobile_number' => 'required|max:10|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'street' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'pincode' => 'required|max:6',
            'username' => 'required|max:25|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    protected function register()
    {
        $data=Input::all();

        Pub::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'street' => $data['street'],
            'city' => $data['city'],
            'state' => $data['state'],
            'pincode' => $data['pincode'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),

        ]);


        return view('\pub\signin');
    }

    protected function login()
    {
        $data=Input::all();
        $validation = Pub::validate($data);
        if ($validation->passes()) {
            \Auth::guard('pubs')->attempt(['username' => $data['username'], 'password' => $data['password']]);

            if (\Auth::guard('pubs')->attempt(['username' => $data['username'], 'password' => $data['password']])) {
                return \Redirect::route('pub_ser')->with('message', 'You have logged in successfully');
            } else {
                return view('/pub/signin')->withErrors($validation)
                    ->withInput(Input::except('password'));

            }
        }
        else  return view('/pub/signin')->withErrors($validation)
            ->withInput(Input::except('password'));

    }


    protected function logout()
    {

        \Session::flush();
        return \Redirect::route('welcome')->with('message', 'Succesfully Logged Out!');
    }

    protected function services()
    {
        if(!auth()->guard('pubs')->check())
        {
            return view('/pub/signin');
        }
        else
        {
            return view('/pub/pub_services');
        }
    }
    public function welcome()
    {
        return view('welcome');
    }
    protected function ask()
    {
        if(!auth()->guard('pubs')->check())
        {
            return view('/pub/signin');
        }
        else
        {
            return view('/pub/ask_doctor');
        }
    }

    public function post_ask(Requests\ContactFormRequest $request)
    {

        $email = Input::get('email');
        $name = Input::get('name');
        $user_question = $request->get('Question');


        \Mail::send('emails.contact',['email'=>$email, 'name'=>$name,'user_question' => $user_question] , function($message) use ($email,$name,$user_question)
        {
            $message->from( $email , $name);
            $message->to('contactmedicenter@gmail.com', 'Admin')->subject('ASK DOCTOR');
        });



        return \Redirect::route('ask')
            ->with('message', 'Message has been Sent.');

    }



}
