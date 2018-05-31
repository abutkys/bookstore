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
Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('layout.home');
});
Route::get('mains/create', 'MainController@create')->name('mains.create');
Route::post('/mains', 'MainController@store')->name('mains.store');
Route::get('mains/show/{main}', 'MainController@show')->name('mains.show');
Route::get('/mains/index','MainController@index')->name('mains.index');
Route::get('/mains/{main}/edit','MainController@edit')->name('mains.edit');
Route::put('/mains/{main}/update','MainController@update')->name('mains.update');
Route::delete('/mains/{main}','MainController@destroy')->name('mains.delete');
