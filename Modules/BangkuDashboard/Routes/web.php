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

Route::prefix('bangkudashboard')->group(function() {
Route::get('bangkudashboard', 'BangkuDashboardController@index')->name('bangku.index');
Route::post('tambah_bangku','BangkuDashboardController@store')->name('tambahbangku');
Route::get('tambah_bangku','BangkuDashboardController@create')->name('tambah_bangku');

Route::get('delete/{id}','BangkuDashboardController@destroy')->name('hapus');
Route::post('update/{id}','BangkuDashboardController@update')->name('bangkudashboard.update_bangku');
Route::get('edit/{id}','BangkuDashboardController@edit')->name('bangkudashboard.edit');


});
