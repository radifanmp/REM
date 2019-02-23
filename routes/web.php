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

Route::get('/', 'Frontend\HomeController@Index');
Route::get('/about', 'Frontend\HomeController@About');
Route::get('/index', 'Frontend\HomeController@Index');
Route::get('/contact', 'Frontend\HomeController@Contact');

Route::post('/login','Frontend\LoginController@login');