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

Route::prefix('payment')->group(function() {
    Route::get('/', 'PaymentController@index');
    Route::get('/select-payment', 'PaymentController@selectPayment')->name('select-payment');
    Route::post('/checkout', 'PaymentController@checkOut')->name('checkout');
    Route::get('/checkout/{id}', 'PaymentController@indexCheckOut')->name('index.checkout');
});
