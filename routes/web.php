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

Route::get('/add-to-cart/{id}',[
    'uses'=>'App\Http\Controllers\ProductController@getAddToCart',
    'as' => 'product.addtocart'
]);

Route::get('/shopping-cart',[
    'uses'=>'App\Http\Controllers\ProductController@getcart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout',[
    'uses'=>'App\Http\Controllers\ProductController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout',[
    'uses'=>'App\Http\Controllers\ProductController@postCheckout',
    'as' => 'checkout'
]);


Route::group(['prefix' => 'user'],function(){
    Route::group(['middleware' => 'guest'],function(){
        Route::get('/signup',[
            'uses'=>'App\Http\Controllers\UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup',[
            'uses'=>'App\Http\Controllers\UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/signin',[
            'uses'=>'App\Http\Controllers\UserController@getSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin',[
            'uses'=>'App\Http\Controllers\UserController@postSignin',
            'as' => 'user.signin',
            'middleware' => 'guest'
        ]);
    });

    Route::group(['middleware' => 'auth'],function(){
        Route::get('/profile',[
            'uses'=>'App\Http\Controllers\UserController@getProfile',
            'as' => 'user.profile'
        ]);

        Route::get('/logout',[
            'uses'=>'App\Http\Controllers\UserController@getlogout',
            'as' => 'user.logout'
        ]);
    });

});

