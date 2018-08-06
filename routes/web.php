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

Route::get('/','IndexController@index');
Route::get('/programs','IndexController@programs');
Route::get('/about','IndexController@about');
Route::get('/triatletizm','IndexController@triatletizm');
Route::get('/feedback','IndexController@feedback');
Route::get('/training','IndexController@training');
Route::get('/contacts','IndexController@contacts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
