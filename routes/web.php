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
    return view('layouts.lte');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-----------------
Route::get('signin', 'SignInController@create')->name('page.signin');
Route::post('signin', 'SignInController@authenticate')->name('user.signin');
Route::get('signup', 'SignUpController@create')->name('page.signup');
Route::post('signup', 'SignUpController@store')->name('user.signup');

Route::any('notification', 'NotificationController@test')->name('notification.test');
Route::any('firebase', 'Firebase\CloudMessageController@send')->name('fi');
Route::any('test', 'Firebase\CloudMessageController@sendMessageToSpecialDevice')->name('fi2');


Route::prefix('firebase')->group(function () {
    Route::any('device/store', 'Firebase\DeviceController@store')->name('firebase.device.store');
    Route::any('server/store', 'Firebase\ServerController@store')->name('firebase.server.store');
    Route::any('notification/store', 'Firebase\NotificationController@store')->name('firebase.notification.store');
});

