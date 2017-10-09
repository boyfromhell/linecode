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


Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@getContact');
Route::post('contact', 'PageController@postContact');

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author')->group(function() {
  Route::get('/', 'ManageController@index');
  Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users', 'UserController');
});

Route::get('/home', 'HomeController@index')->name('home');
