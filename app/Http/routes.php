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
Route::get('/products', function () {
    return view('services.products');
});
Route::get('/products/read','products@read');
Route::get('/bookings', function () {
    return view('services.bookings');
});
Route::get('/Stylists', function () {
    return view('services.stylists');
});
Route::get('/buy', function () {
    return view('services.sales');
});

Route::auth();

Route::get('/home', 'HomeController@index');
/*
Route::post('/products', 'products@create');
Route::get('/products', 'products@update');
Route::get('/products', 'products@read');
Route::delete('/products', 'products@delete');

Route::post('/bookings', 'bookings@create');
Route::get('/bookings', 'bookings@update');
Route::get('/bookings', 'bookings@read');
Route::delete('/bookings', 'bookings@delete');

Route::post('/stylists', 'salonists@create');
Route::get('/stylists', 'salonists@read');
Route::get('/stylists', 'salonists@update');
Route::delete('/stylists', 'salonists@delete');


Route::post('/sales', 'sales@create');
Route::get('/sales', 'sales@read');
Route::get('/sales', 'sales@update');
Route::delete('/sales', 'sales@delete');


Route::post('/styling', 'styling@create');
Route::get('/styling', 'styling@read');
Route::get('/styling', 'styling@update');
Route::delete('/styling', 'styling@delete');

*/