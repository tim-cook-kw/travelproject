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

Route::prefix('authhomepage')->group(function() {
    Route::get('/', 'AuthHomepageController@index');

    Route::get('/homepage','AuthHomepageController@homepage')->name('homepage');

    Route::get('/login', 'AuthHomepageController@index')->name('login.index');
    Route::post('/login/post','AuthHomepageController@loginpost')->name('loginpost');
    Route::get('/logout','AuthHomepageController@logout')->name('homepage.logout');


    Route::get('/register', 'AuthHomepageController@indexregister')->name('register.index');
        
    Route::post('/register/post', 'AuthHomepageController@register_post')->name('registerpost');
      

});


