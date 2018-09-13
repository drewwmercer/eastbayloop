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

Route::get('/', 'IndexController@index')->name('main-page');

Route::get('/admin', 'Admin\DashboardController@index');
Route::get('/home', 'Admin\DashboardController@index');

Route::get('/login', array('as' => 'login','uses' => 'HomeController@login'));
Route::post('/login', ['uses' => 'Auth\LoginController@login']);
Route::get('/logout', ['uses' => 'Auth\LoginController@logout']);
Route::get('/register', ['uses' => 'HomeController@register']);
Route::post('/register', ['uses' => 'Auth\RegisterController@create']);

Auth::routes();

Route::get('/redirect/{service}', 'SocialAuthController@redirect');

/* Pages */
Route::get('/profile', 'ProfileController@index')->name('profile-page');
Route::get('/explore', 'ExploreController@index')->name('explore-page');
Route::get('/explore/{category}', 'ExploreController@show')->name('explore-subpage');
Route::get('/events', 'EventsController@index')->name('events-page');
Route::get('/fashion', 'FashionController@index')->name('fashion-page');
Route::get('/fashion/designer-house', 'FashionController@designerHouseShow')->name('fashion-designer-page');
Route::get('/fashion/products', 'FashionController@showProducts')->name('fashion-product-page');
Route::get('/fashion/product', 'FashionController@showProduct')->name('fashion-per-product-page');
Route::get('/market-place', 'MarketPlaceController@index')->name('market-place-page');
Route::get('/market-place/products', 'MarketPlaceController@showProducts')->name('market-place-product-page');
Route::get('/market-place/product', 'MarketPlaceController@showProduct')->name('market-place-per-product-page');
Route::get('/music', 'MusicController@index')->name('music-page');
Route::get('/music/products', 'MusicController@showProducts')->name('music-product-page');
Route::get('/music/product', 'MusicController@showProduct')->name('music-per-product-page');
Route::get('/music/artist', 'MusicController@show')->name('music-artist-page');
Route::get('/music/band', 'MusicController@show')->name('music-band-page');
Route::get('/music/dj', 'MusicController@show')->name('music-dj-page');
Route::get('/music/loop-entertainment', 'MusicController@showLoopEntertainment')->name('music-loop-entertainment-page');
Route::get('/music/venues', 'MusicController@showVenues')->name('music-venues-page');

//Route::get('/home', 'HomeController@index')->name('home');
