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

Route::get('/hello', 'HelloController@index');
Route::post('/hello', 'HelloController@post');

//Route::get('/person', 'PersonController@index');
Route::get('/test', 'PersonController@index');

Route::get('/person/find', 'PersonController@find');
Route::post('/person/find', 'PersonController@search');

Route::get('/hello/add', 'HelloController@add');
Route::post('/hello/add', 'HelloController@create');

Route::get('/hello/settings', 'HelloController@settings');
Route::post('/hello/settings', 'HelloController@update');