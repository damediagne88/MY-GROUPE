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
    return view('welcome');
});

Route::get('/','PageController@home')->name('pages.home');
Route::get('/about','PageController@about')->name('pages.about');
Route::get('/contact','ContactsController@create')->name('contacts.create');
Route::post('/contact','ContactsController@store')->name('contacts.store');