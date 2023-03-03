<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Auth::routes();

//route::get('sendSms//','HomeController@sendSms');

Route::get('/', function () {
    return view('front.home');
});


