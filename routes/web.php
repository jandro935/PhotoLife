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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/**** Facebook Login ****/
Route::get('facebook/authorize', function () {
    return Socialize::with('facebook')->redirect();
})->name('fb');

Route::get('facebook/save', 'Auth\LoginController@facebook');

/**** Twitter Login ****/
Route::get('twitter/authorize', function () {
    return Socialize::with('twitter')->redirect();
})->name('tw');

Route::get('twitter/save', 'Auth\LoginController@twitter');
