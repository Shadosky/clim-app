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

Route::get('/register', function () {
    return redirect('login');
});
Route::post('/register', function () {
    return null;
});
Route::get('/kusanagi', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/kusanagi', 'Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('default');

Route::post('/vote', 'HomeController@vote');
Route::get('/vote', 'HomeController@getVote');
