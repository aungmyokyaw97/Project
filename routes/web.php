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

Route::get('/admin','PageController@admin')->name('dashboard');
Route::get('/','PageController@index')->name('hom');
Route::get('/phone','PageController@phone')->name('phone');
Route::get('/view','PageController@view')->name('view');
Route::get('/test',function(){
return view('test');
});


Route::resource('maincatg','MainCatgController');
Route::resource('subcatg','CategoryController');
Route::resource('brand','BrandController');
Route::resource('product','ProductController');
Route::get('/find/subcatg','ProductController@subcatg');
Route::get('/find/brand','ProductController@brand');
Route::resource('media','MediaController');
