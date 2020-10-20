<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('shop.index');
//});

Route::get('/',[

    'uses'=>'App\Http\Controllers\ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/signup',[
    'uses'=>'App\Http\Controllers\UserController@getSignup',
    'as' => 'user.signup'
]);

Route::post('/signup',[
    'uses'=>'App\Http\Controllers\UserController@postSignup',
    'as' => 'user.signup'
]);

