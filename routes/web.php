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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});

Route::group(['prefix'=>'admin/profile'],function(){
    Route::get('create','Admin\ProfileController@add');
    Route::get('edit','Admin\ProfileController@edit')->middleware('auth');
    Route::get('creatework','Admin\ProfileController@views')->middleware('auth');
});



Route::get('XXX','AAAController@bbb');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
