<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');

Route::get('/list', 'PagesController@list');

Route::get('/upload', 'PagesController@upload');

Route::get('/verification', 'PagesController@verification');

Route::get('/signup', 'PagesController@signup');

Route::get('/login', 'PagesController@login');

Route::get('/login-admin', 'PagesController@loginAdmin');