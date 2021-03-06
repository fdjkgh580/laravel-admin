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

Auth::routes();

Route::get('/', function ()
{
    return view('welcome');
});


//
Route::get('/home', 'HomeController@index')->name('home');

// 後台管理
Route::prefix('admin')->group(function ()
{
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('login', 'Admin\LoginController');
    Route::get('logout', 'Admin\LoginController@logout');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('status', 'Admin\StatusController');
    Route::resource('types', 'Admin\TypesController');
    Route::resource('images', 'Admin\ImagesController');
    Route::resource('articles', 'Admin\ArticlesController');
    Route::resource('files', 'Admin\FilesController');
});