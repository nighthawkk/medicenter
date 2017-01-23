<?php

namespace App\Http\Controllers\Auth;

use App\medicine;
use App\ShoppingCart;
use Illuminate\Http\Request;
use Validator;
use App\doctor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class DocController extends Controller
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
            'clinic_name' => 'required|max:255',
            'clinic_address' => 'required|max:255',
            'time_slot' => 'required|max:255',
            'speciality' => 'required|max:255',
            'fee' => 'required|max:5',
            'reg_number' => 'required|max:255',

        ]);
    }


    protected function register()
    {
        $data = Input::all();
        doctor::create([
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
            'clinic_name' => $data['clinic_name'],
            'clinic_address' => $data['clinic_address'],
            'time_slot' => $data['time_slot'],
            'speciality' => $data['speciality'],
            'fee' => $data['fee'],
            'reg_number' => $data['reg_number'],

        ]);


        return view('\doc\login');
    }
    protected function login()
    {
        $inp = Input::all();
        \Auth::guard('docs')->attempt(['username' => $inp['username'], 'password' => $inp['password']]);
        if(!auth()->guard('docs')->check())
        {
            return view('/doc/login');
        }
        else {


            // $user= \Auth::guard('docs')->user();
            return view('/doc/doc_services');
        }

    }

    protected function logout()
    {

        \Session::flush();
        return \Redirect::route('welcome')->with('message', 'Succesfully Logged Out!');
    }

    protected function services()
    {
        if(!auth()->guard('docs')->check())
        {
            return view('/doc/login');
        }
        else
        {
            return view('/doc/doc_services');
        }
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function doAddToCart($id){
        if(!auth()->guard('docs')->check())
        {
            return view('/doc/login');
        }
        else {
            $medicine = medicine::find($id);

            $shopping_cart = new ShoppingCart();
            $med = Input::get('quantity');


            $shopping_cart->user_id = \Auth::guard('docs')->user()->id;
            $shopping_cart->medicine_id = $medicine->id;
            $shopping_cart->medicine_name = $medicine->NAME;
            $shopping_cart->medicine_company = $medicine->COMPANY;
            $shopping_cart->medicine_price = ($medicine->PRICE / $medicine->QUANTITY) * $med;
            $shopping_cart->quantity = $med;
            $shopping_cart->save();

            return \Redirect::to('/doc/my-cart');
        }
    }

    public function showMyCart(){
        if(!auth()->guard('docs')->check())
        {
            return view('/doc/login');
        }
        else {
            $my_cart = \DB::table('shopping_carts')->where('user_id', '=', \Auth::guard('docs')->user()->id)->where('status', '=', '')->get();
            $for_delivery = \DB::table('shopping_carts')->where('user_id', '=', \Auth::guard('docs')->user()->id)->where('status', '=', 'For Delivery')->get();
            $my_cart_total = \DB::table('shopping_carts')->where('user_id', '=', \Auth::guard('docs')->user()->id)->where('status', '=', '')->sum('medicine_price');

            // $my_cart = MassShoppingCart::where('user_id','=',Auth::user()->id)->get();
            // $for_delivery = MassShoppingCart::where('status','=','For Delivery')->get();

            //return $my_cart->user_id;
            return \View::make('doc/my_cart')->with('my_cart', $my_cart)->with('for_delivery', $for_delivery)->with('my_cart_total', $my_cart_total);
        }
    }

    public function doRemoveFromCart($id){
        if(!auth()->guard('docs')->check())
        {
            return view('/doc/login');
        }
        else {
            $shopping_cart = ShoppingCart::find($id);

            $shopping_cart->delete();

            return \Redirect::to('/pub/my-cart');
        }
    }

    public function doApproveMyCart(){
        // $mass_shopping_cart = MassShoppingCart::where('user_id','=',Auth::user()->id);

        // $mass_shopping_cart->status = 'For Delivery';
        // $mass_shopping_cart->payment_type = Input::get('payment_type');
        // $mass_shopping_cart->bank_referral_code = Input::get('bank_referral_code');
        // $mass_shopping_cart->save();

        // return Redirect::to('my-cart');
        if(!auth()->guard('docs')->check())
        {
            return view('/doc/login');
        }
        else {
            \DB::table('shopping_carts')
                ->where('user_id', Auth::guard('docs')->user()->id)
                ->update(array(
                    'status' => 'For Delivery',
                    'payment_type' => Input::get('payment_type'),
                    'bank_referral_code' => Input::get('bank_referral_code')
                ));

            return \Redirect::to('/doc/my-cart');
        }
    }
}
