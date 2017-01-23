<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\medicine;
use App\ShoppingCart;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function doAddToCart($id){
        $medicine = medicine::find($id);

        $shopping_cart = new ShoppingCart();
        $med=Input::get('quantity');


        $shopping_cart->user_id = \Auth::user()->id;
        $shopping_cart->medicine_id = $medicine->id;
        $shopping_cart->medicine_name = $medicine->NAME;
        $shopping_cart->medicine_company = $medicine->COMPANY;
        $shopping_cart->medicine_price = ($medicine->PRICE/$medicine->QUANTITY)*$med;
        $shopping_cart->quantity = $med;
        $shopping_cart->save();

        return \Redirect::to('my-cart');
    }

    public function showMyCart(){
        $my_cart = \DB::table('shopping_carts')->where('user_id','=',\Auth::user()->id)->where('status','=','')->get();
        $for_delivery = \DB::table('shopping_carts')->where('user_id','=',\Auth::user()->id)->where('status','=','For Delivery')->get();
        $my_cart_total = \DB::table('shopping_carts')->where('user_id','=',\Auth::user()->id)->where('status','=','')->sum('medicine_price');

        // $my_cart = MassShoppingCart::where('user_id','=',Auth::user()->id)->get();
        // $for_delivery = MassShoppingCart::where('status','=','For Delivery')->get();

        //return $my_cart->user_id;
        return \View::make('my_cart')->with('my_cart',$my_cart)->with('for_delivery',$for_delivery)->with('my_cart_total',$my_cart_total);
    }

    public function doRemoveFromCart($id){
        $shopping_cart = ShoppingCart::find($id);

        $shopping_cart->delete();

        return \Redirect::to('my-cart');
    }

    public function doApproveMyCart(){
        // $mass_shopping_cart = MassShoppingCart::where('user_id','=',Auth::user()->id);

        // $mass_shopping_cart->status = 'For Delivery';
        // $mass_shopping_cart->payment_type = Input::get('payment_type');
        // $mass_shopping_cart->bank_referral_code = Input::get('bank_referral_code');
        // $mass_shopping_cart->save();

        // return Redirect::to('my-cart');

        \DB::table('shopping_carts')
            ->where('user_id',Auth::user()->id)
            ->update(array(
                'status'=>'For Delivery',
                'payment_type'=>Input::get('payment_type'),
                'bank_referral_code'=>Input::get('bank_referral_code')
            ));

        return Redirect::to('my-cart');
    }


}
