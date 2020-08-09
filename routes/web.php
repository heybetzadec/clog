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

Route::get('/roles', 'PermissionController@Permission');


Route::group(array('prefix' => 'admin', 'namespace' => 'Dashboard', 'middleware' => 'role:developer'), function () {
    Route::get('/', 'HomeController@index')->name('dashboard.home');
    Route::get('/users', 'UserController@index')->name('dashboard.users');
    Route::get('/categories', 'CategoryController@index')->name('dashboard.categories');
    Route::get('/posts', 'PostController@index')->name('dashboard.posts');
    Route::get('/slider', 'SliderController@index')->name('dashboard.slider');
    Route::get('/recommend', 'RecommendController@index')->name('dashboard.recommend');
    Route::get('/ads', 'AdsController@index')->name('dashboard.ads');
    Route::get('/settings', 'SettingsController@index')->name('dashboard.settings');
});
