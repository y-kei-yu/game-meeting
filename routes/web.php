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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('gamemeeting/create', 'Admin\GamemeetingController@add');
     Route::post('gamemeeting/create', 'Admin\GamemeetingController@create');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
