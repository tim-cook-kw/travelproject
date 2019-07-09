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

Route::prefix('messages')->group(function () {
    Route::get('/', 'MessagesController@index')->name('index');
    Route::post('/send', 'MessagesController@send')->name('pesan.send');
    Route::get('/show', 'MessagesController@show')->name('pesan.show');
    Route::get('/delete/{id}', 'MessagesController@destroy')->name('pesan.delete');
});
