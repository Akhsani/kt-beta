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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category','CategoriesController');
Route::resource('media','MediaController');
Route::resource('talents','TalentsController');
Route::resource('users','UsersController');

Route::get('/talents/create', 'TalentsController@create');
Route::post('/talents','TalentsController@store');
Route::get('/talents/category/{category}','TalentsController@category');