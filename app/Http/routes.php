<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/







Route::get('/ajax-cat',function(){
    $med_id = \Illuminate\Support\Facades\Input::get('med_id');

    $company = \App\medicine::where('id', '=', $med_id)->get();
    return Response::json($company);
});
Route::group(['middleware' => ['web']], function () {
    Route::auth();

});

Route::group(['middleware' => 'web'], function () {
    $this->get('/retail/login', 'Auth\AuthController@showLoginForm');
    $this->post('/retail/login', 'Auth\AuthController@login');
    $this->get('/retail/logout', 'Auth\AuthController@logout');

// Registration Routes...
    $this->get('/retail/register', 'Auth\AuthController@showRegistrationForm');
    $this->post('/retail/register', 'Auth\AuthController@register');



    Route::get('/about', function () {
        return view('about_us');
    });
    Route::get('/contact', ['as' => 'contact', 'uses' => 'ContactController@show']);
    Route::post('/contact', ['as' => 'contact_store', 'uses' => 'ContactController@store']);
    Route::get('/services', function () {
        return view('services');
    });

    Route::get('/terms', function () {
        return view('terms');
    });
    Route::get('/faq', function () {
        return view('faq');
    });
    Route::get('/', ['as'=>'welcome','uses'=>'Auth\PubController@welcome']);

    Route::get('/medicine', function() {
        $medicines = \App\medicine::all();
        return view('medicine')->with('medicines',$medicines);
    });


    Route::post('add-to-cart/{id}',array('uses'=>'HomeController@doAddToCart'));
    Route::get('my-cart',array('uses'=>'HomeController@showMyCart'));
    Route::get('remove-from-cart/{id}',array('uses'=>'HomeController@doRemoveFromCart'));
    Route::post('approve-my-cart',array('uses'=>'HomeController@doApproveMyCart'));
//public
    Route::get('/pub/services',['middleware' => 'auth.pub','as'=>'pub_ser', 'uses' => 'Auth\PubController@services']);
    Route::get('/pub/signin', function () {
        if(!auth()->guard('pubs')->check())
        {
            return view('/pub/signin');
        }
        else
        {
            return view('/pub/pub_services')->with('message', 'Already Loggged In!!');
        }
    });
    Route::post('/pub/signin', 'Auth\PubController@login');
    Route::get('/pub/logout', 'Auth\PubController@logout');
    Route::get('/pub/signup', function () {
        return view('/pub/signup');
    });
    Route::post('/pub/signup', array('uses'=>'Auth\PubController@register'));
    Route::get('/pub/ask_doctor',array('uses'=>'Auth\PubController@ask'));
    Route::post('/pub/ask_doctor',array('as'=>'ask', 'uses'=>'Auth\PubController@post_ask'));
    Route::get('upload', function() {
        return View::make('upload');
    });
    Route::post('apply/upload', 'ApplyController@upload');


//doc
    Route::post('/doc/services', 'Auth\DocController@login');
    Route::get('/doc/login', function () {
        if(!auth()->guard('docs')->check())
        {
            return view('/doc/login');
        }
        else
        {
            return view('/doc/doc_services')->with('message', 'Already Loggged In!!');
        }
    });
    Route::get('/doc/logout', 'Auth\DocController@logout');
    Route::get('/doc/register', function () {
        return view('doc/register');
    });

    Route::get('/doc/order',function() {
        if(!auth()->guard('docs')->check())
        {
            return view('/doc/login');
        }
        else
        {
            $medicines = \App\medicine::all();
            return view('/doc/order')->with('medicines',$medicines);
        }

    });
    Route::post('/doc/register', array('uses'=>'Auth\DocController@register'));
    Route::get('/doc/services',['middleware' => 'auth.doc','as'=>'dpc_ser', 'uses' => 'Auth\DocController@services']);
    Route::post('/doc/add-to-cart/{id}',array('uses'=>'Auth\DocController@doAddToCart'));
    Route::get('/doc/my-cart',array('uses'=>'Auth\DocController@showMyCart'));
    Route::get('/doc/remove-from-cart/{id}',array('uses'=>'Auth\DocController@doRemoveFromCart'));
    Route::post('/doc/approve-my-cart',array('uses'=>'Auth\DocController@doApproveMyCart'));

});
