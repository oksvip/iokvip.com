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

Route::get('/', 'Index\IndexController@index')->name('home');
Route::get('/about', 'Index\PagesController@about')->name('about');
Route::get('/contact', 'Index\PagesController@contact')->name('contact');
Route::get('/works', 'Index\WorksController@index')->name('works.index');
Route::get('/works/show', 'Index\WorksController@show')->name('works.show');
