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
    return view('welcome');
});


Auth::routes();

Route::get('/list', function () {
    return view('list');
});
Route::get('/authors', function () {
    return view('Authors');
});

Route::resource('books','BookController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/book', 'HomeController@book')->name('book');


Route::get('/admin/login','Auth\AdminLoginController@showLoginform')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
