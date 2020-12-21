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

Route::get('/', 'ProductController@index')->name('index');
Route::group(['middleware'=>'auth'] ,function(){
    Route::get('/create', 'ProductController@create')->name('pro.create');
    Route::post('/store','ProductController@store')->name('pro.store');
    
    Route::get('/product/{id}','ProductController@show')->name('pro.show');
   
    Route::get('/category','CategoryController@index')->name('cat.index');
   
    Route::get('/crecategory', 'CategoryController@create')->name('cat.create');
    Route::post('/catstore','CategoryController@store')->name('cat.store');
    Route::get('/category/{id}','CategoryController@show')->name('cat.show');
   
});
Route::group(['middleware'=>'admin','auth'] ,function(){
    Route::delete('/product/delete/{id}','ProductController@destroy')->name('pro.delete');
    Route::get('/product/edit/{id}','ProductController@edit')->name('pro.edit');
    Route::patch('/product/update/{id}','ProductController@update')->name('pro.update');
    Route::delete('/category/delete/{id}','CategoryController@destroy')->name('cat.delete');
    Route::get('/category/edit/{id}','CategoryController@edit')->name('cat.edit');
    Route::patch('/category/update/{id}','CategoryController@update')->name('cat.update'); 
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
