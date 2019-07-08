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

Route::prefix('transaksi')->group(function() {
    Route::get('/', 'TransaksiController@index')->name('transaksi');
    Route::post('/update/{id}', 'TransaksiController@update')->name('update_transaksi');
    Route::get('/sendinvoice/{id}','TransaksiController@invoice')->name('invoice');
});

