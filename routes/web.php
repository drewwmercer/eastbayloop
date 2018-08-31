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

Route::get('/admin', 'Admin\DashboardController@index');
Route::get('/home', 'Admin\DashboardController@index');

Route::get('/login', array('as' => 'login','uses' => 'HomeController@login'));
Route::post('/login', ['uses' => 'Auth\LoginController@login']);
Route::get('/logout', ['uses' => 'Auth\LoginController@logout']);
Route::get('/register', ['uses' => 'HomeController@register']);
Route::post('/register', ['uses' => 'Auth\RegisterController@create']);
