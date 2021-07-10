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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','webController@index')->name('home');
Route::get('about','webController@about')->name('about');
Route::get('contact','mailController@contact')->name('contact');
Route::post('contact-email','mailController@contact_email');
Route::get('service','webController@service')->name('service');
Route::get('blog','webController@blog')->name('blog');
Route::get('digital-printing','webController@digitalprinting')->name('digital-printing');
Route::get('large-format','webController@largeformat')->name('large-format');
Route::get('offset-printing','webController@offsetprinting')->name('offset-printing');