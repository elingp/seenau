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

Route::get('/signup-deprecated', 'PagesController@signupDeprecated');

Route::get('/login-deprecated', 'PagesController@loginDeprecated');

Route::get('/preview', 'PagesController@preview');

Auth::routes();

Route::get('/home', 'HomeController@index');
