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
// Route::get('signin', 'SignInController@create')->name('page.signin');
// Route::post('signin', 'SignInController@authenticate')->name('user.signin');
// Route::get('signup', 'SignUpController@create')->name('page.signup');
// Route::post('signup', 'SignUpController@store')->name('user.signup');

// Route::any('notification', 'NotificationController@test')->name('notification.test');
// Route::any('firebase', 'Firebase\CloudMessageController@send')->name('fi');
// Route::any('test', 'Firebase\CloudMessageController@sendMessageToSpecialDevice')->name('fi2');
// Route::any('test2', 'Firebase\DeviceController@index');


// Route::prefix('firebase')->group(function () {
//     Route::any('device/store', 'Firebase\DeviceController@store')->name('firebase.device.store');
//     Route::any('server/store', 'Firebase\ServerController@store')->name('firebase.server.store');
//     Route::any('notification/store', 'Firebase\NotificationController@store')->name('firebase.notification.store');
// });
// Route::prefix('notification')->group(function () {
//     Route::get('list', 'Notification\NotificationController@index')->name('notification.list');
//     Route::get('device/list', 'Firebase\DeviceController@index')->name('notification.device.list');
//     Route::get('create/{id}', 'Notification\NotificationController@create')->name('notification.create');
//     Route::post('store', 'Notification\NotificationController@store')->name('notification.store');
//     Route::any('device/message/create/{id}', 'Firebase\NotificationController@create')->name('notification.device.message.create');
//     Route::any('device/message/store', 'Firebase\NotificationController@store')->name('notification.device.message.store');
// });

// ------------------
Route::prefix('notification')->group(function () {
	// Firebase server route
    Route::any('firebase/server/list', 'Notification\FirebaseServerController@index')->name('notification.firebase.server.list');	
    Route::any('firebase/server/create', 'Notification\FirebaseServerController@create')->name('notification.firebase.server.create');
    Route::any('firebase/server/store', 'Notification\FirebaseServerController@store')->name('notification.firebase.server.store'); 
	Route::any('firebase/server/edit/{id}', 'Notification\FirebaseServerController@edit')->name('notification.firebase.server.edit');    
	Route::any('firebase/server/update/{id}', 'Notification\FirebaseServerController@update')->name('notification.firebase.server.update');
	Route::any('firebase/server/destroy', 'Notification\FirebaseServerController@destroy')->name('notification.firebase.server.destroy');	
	// End 
	// Device Subcription route
    Route::any('device/subcription/list', 'Notification\DeviceSubcriptionController@index')->name('notification.device.subcription.list');	
    Route::any('device/subcription/create', 'Notification\DeviceSubcriptionController@create')->name('notification.device.subcription.create');    
    Route::any('device/subcription/store', 'Notification\DeviceSubcriptionController@store')->name('notification.device.subcription.store'); 
    Route::any('device/subcription/edit/{id}', 'Notification\DeviceSubcriptionController@edit')->name('notification.device.subcription.edit');         
    Route::any('device/subcription/update/{id}', 'Notification\DeviceSubcriptionController@update')->name('notification.device.subcription.update');   
    Route::any('device/subcription/destroy', 'Notification\DeviceSubcriptionController@destroy')->name('notification.device.subcription.destroy'); 
    // End
    // Message route
    Route::any('message/list', 'Notification\MessageController@index')->name('notification.message.list');
    Route::any('message/create/{id}', 'Notification\MessageController@create')->name('notification.message.create');    
    Route::any('message/store', 'Notification\MessageController@store')->name('notification.message.store');    
    Route::any('message/edit/{id}', 'Notification\MessageController@edit')->name('notification.message.edit');
    Route::any('message/update/{id}', 'Notification\MessageController@update')->name('notification.message.update');
    Route::any('message/destroy', 'Notification\MessageController@destroy')->name('notification.message.destroy');

    // Push message
    Route::any('message/push/{id}', 'Notification\PushMessageController@pushMessage')->name('notification.message.push');    



});
    // Test 
    Route::any('test', 'TestController@test'); 