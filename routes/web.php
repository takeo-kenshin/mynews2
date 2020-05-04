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

Route::group(['prefix' => 'admin','middleware'=>'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create','Admin\NewsController@create');
    Route::get('news','Admin\NewsController@index');
    Route::get('news/edit','Admin\NewsController@edit');
    Route::post('news/edit','Admin\NewsController@update');
    Route::get('news/delete','Admin\NewsController@delete');
});

Route::group(['prefix'=>'admin/profile','middleware'=>'auth'],function(){
    Route::get('create','Admin\ProfileController@add');
    Route::get('edit','Admin\ProfileController@edit');
    Route::post('edit','Admin\ProfileController@update');
    Route::get('creatework','Admin\ProfileController@view');
    Route::post('creatework','Admin\ProfileController@creatework');
    Route::get('compilation','Admin\ProfileController@compilation');
    Route::post('compilation','Admin\ProfileController@renewal');
    Route::get('index','Admin\ProfileController@index');
});



Route::get('XXX','AAAController@bbb');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','NewsController@index');

Route::get('/profile','ProfileController@index');
