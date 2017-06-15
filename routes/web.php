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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('authorize', function () {
    return Socialize::with('facebook')->redirect();
})->name('fb');

//Route::get('user', function () {
//    $user = Socialize::with('facebook')->user();
//    return dd($user);
//});

Route::get('facebook/save', 'Auth\LoginController@facebook');
