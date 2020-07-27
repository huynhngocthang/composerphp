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

Route::group(['prefix' => 'cities'], function () {
    Route::get('/','CityController@index')->name('cities.index') ;

    Route::get('/create', 'cityController@create')->name('cities.create') ;

    Route::post('/create', 'cityController@store')->name('cities.store') ;

    Route::get('/{id}/edit', 'cityController@edit')->name('cities.edit') ;

    Route::post('{id}/edit', 'cityController@update')->name('cities.update') ;

    Route::get('{id}/destroy', 'cityController@destroy')->name('cities.destroy') ;
});


Route::group(['prefix' => 'customers'], function () {
    Route::get('/','CustomerController@index')->name('customers.index') ;

    Route::get('/create', 'CustomerController@create')->name('customers.create') ;

    Route::post('/create', 'CustomerController@store')->name('customers.store') ;

    Route::get('/{id}/edit', 'CustomerController@edit')->name('customers.edit') ;

    Route::post('{id}/edit', 'CustomerController@update')->name('customers.update') ;

    Route::get('{id}/destroy', 'CustomerController@destroy')->name('customers.destroy') ;

    Route::get('/filter','CustomerController@filterByCity')->name('customers.filterByCity');

    Route::get('/search', 'CustomerController@search')->name('customers.search') ;
});
