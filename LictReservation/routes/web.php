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

Route::get('/logout', 'Auth\LoginController@logout')->name('logout-user');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'SocialController@redirectToProvider');
Route::get('auth/{provider}/callback', 'SocialController@handleProviderCallback');


Route::get('/reservation', 'ReservationController@index')->name('reservation-index');
Route::post('/reservation', 'ReservationController@add')->name('post-reservation');