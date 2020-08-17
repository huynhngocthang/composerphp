<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/','dirtycoinController@index')->name('dirtcoinall') ;

Route::get('/dasboard', function() {

    return view('dasboard.dasboard') ;
});

Route::group(['prefix' => 'dirtycoins'], function () {
    Route::get('/detail/{id}','dirtycoinController@show')->name('detail') ;
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/','CartController@index')->name('cartAll') ;
    Route::get('/{product}/add','CartController@addCart')->name('addcart') ;
    Route::get('{product}/destroy', 'CartController@RemoveRow')->name('removecart') ;
    Route::get('clear','CartController@clearall')->name('clearall');
    Route::get('apiCart','CartController@apiCart')->name('apiCart');
    Route::get('checkout','CartController@checkout')->name('checkout') ;
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

