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
Route::get('/results','IndexController@feedback');
Route::get('/training','IndexController@training');
Route::get('/contacts','IndexController@contacts');
Route::post('/open', 'IndexController@open');
Route::post('/buy', 'IndexController@buy');
Route::post('/show-new', 'IndexController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home/add-new', 'HomeController@addNew');
Route::post('/home/add-program', 'HomeController@addProgram');
Route::post('/home/add-train', 'HomeController@addTrain');
Route::post('/home/add-feedback', 'HomeController@addFeedback');
Route::post('/home/add-photos', 'HomeController@addPhotos');