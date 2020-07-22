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

//Routes_Auth
Auth::routes();




Route::redirect('/', 'inicio', 301);

Route::get('/inicio', 'Web\PageController@index')->name('index');


Route::get('/offline', function () {
    return view('laravelpwa::offline');
});



Route::get('/home', 'HomeController@index')->name('home');

//Selects
Route::POST('/councils/getcouncils','Admin\CouncilsController@getCouncilsByCountryId');

//Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/panel-administrativo', 'Admin\AdminController@index')->name('admin');
    Route::resource('categories', 'Admin\CategoriesController');
    Route::resource('countries', 'Admin\CountriesController');
    Route::resource('councils', 'Admin\CouncilsController');
    Route::resource('cities', 'Admin\CitiesController');
    Route::resource('roles', 'Admin\RolesController');
    Route::resource('teams', 'Admin\TeamsController');
    Route::resource('users', 'Admin\UsersController');







});
