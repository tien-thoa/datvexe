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
Route::get('/user/{id}', 'userController@profile')->name('user.profile');

Route::get('/edit/user/', 'userController@edit')->name('user.edit');
Route::post('/edit/user/', 'userController@update')->name('user.update');

Route::get('/edit/password/user/', 'userController@passwordEdit')->name('password.edit');
Route::post('/edit/password/user/', 'userController@passwordUpdate')->name('password.update');

