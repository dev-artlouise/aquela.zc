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

Route::redirect('/', '/home') ;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//units route 
Route::get('/units/{unit}', 'UnitController@index')->name('units.show');


Route::get('/add-to-list/{unit}', 'ListController@add')->name('list.add')->middleware('auth');
//cart list
Route::get('/list', 'ListController@index')->name('list.index')->middleware('auth');
Route::get('/list/destroy/{itemId}', 'ListController@destroy')->name('list.destroy')->middleware('auth');
Route::get('/list/reserve', 'ListController@reserve')->name('list.reserve')->middleware('auth');


//Bookings Route Resources
Route::resource('bookings', 'BookingController')->middleware('auth');


//Apartment Route Resources
Route::resource('apartments', 'ApartmentController')->middleware('auth'); 
Route::get('/apartments/search', 'ApartmentController@search')->name('apartment.search');

//Paypal Routes
Route::get('paypal/checkout/{booking}', 'PaypalController@getExpressCheckout')->name('paypal.checkout');
Route::get('paypal/checkout-success/{booking}', 'PaypalController@getExpressCheckoutSuccess')->name('paypal.success');
Route::get('paypal/checkout-cancel', 'PaypalController@CancelPage')->name('paypal.cancel');

//voyager
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
