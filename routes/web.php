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



// Authentication Routes...
//Auth::routes();
// provisoirement on utilise que ces routes pour l'auth
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Custom registration  // on va definir nous même le comportement
// de la registration ...
Route::get('registration', 'CustomAuthController@registration')->name('auth.custom.Registration');
Route::post('post-registration', 'CustomAuthController@postRegistration');


Route::get('registrationEdit/{user}', 'CustomAuthController@edit')->name('auth.custom.registration.edit');
Route::post('registrationUpdate/{user}', 'CustomAuthController@update')->name('auth.custom.registration.update');

// Home
Route::get('/', 'HomeController@index')->name('home');


// logs
Route::resource('logs','LogController',['only' => ['index']]);

Route::delete('logs','LogController@destroyAll')->name('deleteAllLogs');
//
Route::resource('users', 'UsersController');
