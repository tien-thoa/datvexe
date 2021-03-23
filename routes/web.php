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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/{id}', 'UserController@profile')->name('user.profile');

Route::get('/edit/user/', 'UserController@edit')->name('user.edit');
Route::post('/edit/user/', 'UserController@update')->name('user.update');

Route::get('/edit/password/user/', 'UserController@passwordEdit')->name('password.edit');
Route::post('/edit/password/user/', 'UserController@passwordUpdate')->name('password.update');

// Route::get('/find_ticket', 'UserController@searchTickit' )->name('search.tickit');
// Route::get('/home', 'UserController@home');


// Route::post('/tim-kiem', 'UserController@search');

// Route::get('/test', 'UserController@test');


// Route::get('/search_ticket', 'UserController@show');
route::get('/test', function()
{
    return view('test');
});

// Route::get('/search_ticket', function()
// {
//     return view('search_ticket');
// });

Route::get('/search_ticket', 'UserController@search')->name('search_ticket');

Route::get('/check-test', 'UserController@check1')->name('check1');
Route::post('/check-test', 'UserController@check2')->name('check2');


