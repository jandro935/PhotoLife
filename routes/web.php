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

Route::get('facebook/authorize', function() {
    return \AdamWathan\EloquentOAuth\Facades\OAuth::authorize('facebook');
})->name('fb');

Route::get('user', function () {
    \AdamWathan\EloquentOAuth\Facades\OAuth::login('facebook');
    $user = Auth::user();
    return dd($user);
});
