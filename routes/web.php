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

// you can write the route as fol: 

// Route::resource('/admin/users', 'Admin\UserController', ['except'=>['show','create','store']]);

###########
// or you can do as next line....
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

    Route::resource('/users', 'UserController', ['except'=>['show','create','store']]);



});


//////
Route::get('/items', 'Item\ItemController@item')->name('items');;

Route::resource('items', 'Item\ItemController');

Route::get('/search', 'Item\ItemController@search');
