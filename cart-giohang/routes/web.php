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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/', 'CartController@index')->name('cart.list') ;

    Route::get('/{id}/destroy','CartController@destroy')->name('cart.destroy') ;

    Route::get('/{id}/show', 'CartController@show')->name('cart.show') ;

});

Auth::routes();

Route::get('/{id}Showstore','StoreController@showCart')->name('StoreCart.Showstore');

Route::get('/{id}store', 'StoreController@store')->name('StoreCart.store') ;

