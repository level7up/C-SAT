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


Route::get('/','PagesController@index');

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
Route::get('student', 'StudentController@student');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('dr','DoctorController');
Route::resource('ta','TeachersController');

