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

Route::get('/', 'TaskController@welecome')->name('task.welcome') ;

Route::get('/tasks', 'TaskController@index')->name('task.index') ;

Route::get('/create','TaskController@create')->name('task.create') ;

Route::post('/tacks','TaskController@store')->name('task.store') ;

Route::get('{id}/edit', 'TaskController@edit')->name('task.edit') ;

Route::post('{id}/edit','TaskController@update')->name('task.update') ;

Route::get('/{id}/destroy','TaskController@destroy')->name('task.destroy') ;
