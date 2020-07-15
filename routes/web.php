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



Route::get('/', 'Web\PageController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/panel-administrativo', 'Admin\AdminController@index')->name('admin');
    Route::resource('categories', 'Admin\CategoriesController');
    Route::resource('countries', 'Admin\CountriesController');



});
