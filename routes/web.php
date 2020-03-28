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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about-us', 'StaticController@aboutindex');
Route::get('/services', 'StaticController@servicesindex');
Route::get('/gallery', 'StaticController@galleryindex');
Route::get('/contact-us', 'StaticController@contactindex');
Route::get('/life-at-i-eon', 'StaticController@servicesindex');
Route::get('/news', 'StaticController@servicesindex');
Route::get('/awards', 'StaticController@servicesindex');
Route::get('/blog', 'StaticController@servicesindex');
Route::get('/our-team', 'StaticController@servicesindex');
Route::get('/careers', 'StaticController@servicesindex');
Route::get('/products', 'StaticController@servicesindex');
