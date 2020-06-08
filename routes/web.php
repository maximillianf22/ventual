<?php

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
    return view('inicio');
});

Route::get('/gracias', function () {
    return view('gracias');
});



Route::post('/store', 'ClientsController@store');
Route::get('/index', 'ClientsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
