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

Route::get('/e', function () {
    return view('welcome');
});
//client routes
Route::resource('client','App\Http\Controllers\ClientController');
Route::get('search','App\Http\Controllers\ClientController@search');
Route::get('driverDetail','App\Http\Controllers\ClientController@driverDetail');
Route::get('message','App\Http\Controllers\ClientController@message');
Route::get('test','App\Http\Controllers\ClientController@test');
Route::get('success','App\Http\Controllers\ClientController@success');
Route::get('invoice','App\Http\Controllers\ClientController@invoice');
Route::get('invoiceView','App\Http\Controllers\ClientController@invoiceView');
Route::get('carrierDetail/{id}','App\Http\Controllers\ClientController@carrierDetail');
Route::resource('/','App\Http\Controllers\AuthController');
Route::get('Register','App\Http\Controllers\AuthController@register');
Route::get('carrierRegister','App\Http\Controllers\AuthController@carrierRegister');
Route::post('reg','App\Http\Controllers\AuthController@reg')->name('Register');
Route::post('carrierReg','App\Http\Controllers\AuthController@carrierReg')->name('carrierReg');
Route::post('log','App\Http\Controllers\AuthController@login')->name('Login');
Route::get('userLocation', 'App\Http\Controllers\ClientController@location');
Route::get('calculateDistance', 'App\Http\Controllers\GooglemapsController@calculateDistance');
Route::get('getCarrierPrice/{id}','App\Http\Controllers\ClientController@getCarrierPrice');
Route::get('book','App\Http\Controllers\BookingController@book');
Route::get('successRides','App\Http\Controllers\ClientController@successRides');
Route::get('successDetails/{id}','App\Http\Controllers\ClientController@successDetails');


//driver routes
Route::resource('driver','App\Http\Controllers\DriverController');
Route::get('clientList','App\Http\Controllers\DriverController@clientList');
Route::get('acceptedRequest','App\Http\Controllers\DriverController@acceptedRequest');
Route::get('clientDetails/{id}','App\Http\Controllers\DriverController@clientDetails');
Route::get('takeRequest','App\Http\Controllers\DriverController@takeRequest');
Route::get('successRequest','App\Http\Controllers\DriverController@successRequest');
Route::post('checkIn','App\Http\Controllers\DriverController@checkIn')->name('checkIn');
Route::post('checkOut','App\Http\Controllers\DriverController@checkOut')->name('checkOut');


Auth::routes();

