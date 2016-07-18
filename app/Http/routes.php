<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});



Route::get('stylist','StylistsController@index');
Route::get('stylist/create','StylistsController@create');
Route::post('stylist','StylistsController@store');
Route::get('stylist/{stylist}','StylistsController@show');
Route::get('stylist/{stylist}/edit','StylistsController@edit');
Route::put('stylist/{stylist}','StylistsController@update');
Route::delete('stylist/{stylist}','StylistsController@destroy');


/*Route::get('','');
Route::get('','');
Route::post('','');
Route::get('','');
Route::get('','');
Route::put('','');
Route::delete('','');


Route::get('','');
Route::get('','');
Route::post('','');
Route::get('','');
Route::get('','');
Route::put('','');
Route::delete('','');


Route::get('','');
Route::get('','');
Route::post('','');
Route::get('','');
Route::get('','');
Route::put('','');
Route::delete('','');


Route::get('','');
Route::get('','');
Route::post('','');
Route::get('','');
Route::get('','');
Route::put('','');
Route::delete('','');
*/
Route::resource('stylists','StylistsController');
Route::resource('bookings','bookingsController');
Route::resource('sales','salesController');
Route::resource('styles','stylesController');
Route::resource('products','productsController');

