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

Route::prefix('logindasboard')->group(function() {
    Route::get('/', 'LogindasboardController@index')->name('login');
    Route::post('/login/post','LogindasboardController@login')->name('login_post');
    Route::get('/logout','LogindasboardController@logout')->name('logout');

    Route::get('/register','LogindasboardController@register_index')->name('register');
    Route::post('/register','LogindasboardController@register_post')->name('register_post');
    
});
