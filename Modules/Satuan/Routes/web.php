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

Route::prefix('satuan')->group(function() {
    Route::get('/', 'SatuanController@index')->name('satuan.index');
    
    Route::get('/create', 'SatuanController@create')->name('satuan.create');
    
    Route::post('/save', 'SatuanController@store')->name('satuan.store');

    Route::get('/delete/{id}', 'SatuanController@destroy')->name('satuan.destroy');
    Route::get('/edit/{id}', 'SatuanController@edit')->name('satuan.edit');
    Route::post('/update/{id}', 'SatuanController@update')->name('satuan.update');
});
