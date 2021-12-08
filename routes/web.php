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

//Route untuk menentukan proses akan dibawa ke CustomerController@index
Route::get('/customer', 'App\Http\Controllers\CustomerController@index');
//Route untuk menentukan proses akan dibawa ke CustomerController@create
Route::post('/customer/create', 'App\Http\Controllers\CustomerController@create');
//Route untuk menentukan proses akan dibawa ke CustomerController@edit
Route::get('/customer/{id}/edit','App\Http\Controllers\CustomerController@edit');
//Route untuk menentukan proses akan dibawa ke CustomerController@update
Route::post('/customer/{id}/update','App\Http\Controllers\CustomerController@update');
//Route untuk menentukan proses akan dibawa ke CustomerController@delete
Route::get('/customer/{id}/delete','App\Http\Controllers\CustomerController@delete');