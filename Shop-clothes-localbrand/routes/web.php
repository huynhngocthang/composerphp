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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dasboard', function() {

    return view('dasboard.dasboard') ;
});

Route::group(['prefix' => 'dirtycoins'], function () {
    Route::get('/','dirtycoinController@index')->name('dirtcoinall') ;

    Route::get('/detail/{id}','dirtycoinController@show')->name('detail') ;
});

Route::group(['prefix' => 'cart'], function () {
    Route::get('/','CartController@index')->name('cartAll') ;
    Route::get('/{product}/add','CartController@addCart')->name('addcart') ;
    Route::get('/{product}/add'. '')->name('destroycart') ;
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

