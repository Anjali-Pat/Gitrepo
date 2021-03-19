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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form_format', 'HomeController@form_format')->name('form_format');
Route::get('/list_format', 'HomeController@list_format')->name('list_format');
Route::post('/create_format_post', 'HomeController@create_format_post')->name('create_format_post');
Route::post('/view_result', 'HomeController@view_result')->name('view_result');
