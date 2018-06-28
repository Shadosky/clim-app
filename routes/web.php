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

Route::get('/login', function () {
    return view('login');
});
Auth::routes();

Route::get('/register', function () {
    return view('login');
});
Route::get('/topSecret', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('default');

Route::post('/vote', 'HomeController@vote');
Route::get('/vote', 'HomeController@getVote');
