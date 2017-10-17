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

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::get('/login', 'Auth\\LoginController@show')->name('login');

Route::get('/backoffice', 'DashboardController@show')->name('dashboard');


Route::get('/backoffice/profile', 'UserController@show')->name('profile');
Route::post('/backoffice/profile', 'UserController@updateProfile');
Route::post('/backoffice/password', 'UserController@changePassword');


Route::get('/backoffice/articles', 'ArticleController@index');
Route::get('/backoffice/article', 'ArticleController@create');
Route::post('/backoffice/article', 'ArticleController@store');
Route::get('/backoffice/article/{article}', 'ArticleController@edit');
Route::post('/backoffice/article/{article}', 'ArticleController@update');
Route::delete('/backoffice/article/{article}', 'ArticleController@destroy');
