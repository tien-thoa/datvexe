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

Route::get('/home', 'HomeController@home')->name('home');

Route::get('change_password', function () {
    return view('change_password');
});

Route::get('view_user','view_usercontrolle@view_user');




// Route::get('view_user',function(){
//     return view('view_user');
// });

Route::get('edit_user/{id}','view_usercontrolle@edit_user');

Route::post('update_user', 'view_usercontrolle@update_user')->name('update_user');