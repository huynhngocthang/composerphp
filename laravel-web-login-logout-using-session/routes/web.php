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

Route::get('/login', 'LoginController@showLogin')->name('show.login') ;
Route::post('/login', 'LoginController@Login')->name('user.login') ;

Route::get('/blog','LoginController@showBlog')->name('show.blog') ;

Route::get('/logout','LogoutController@logOut')->name('user.logout') ;
