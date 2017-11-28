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

Route::name('admin.')->group(function () {
    Route::get('/login', 'Admin\Auth\LoginController@index')->name('login.index');                          // 登录页
    Route::post('/login', 'Admin\Auth\LoginController@login')->name('login');                               // 登录动作
    Route::get('/register', 'Admin\Auth\RegisterController@index')->name('register.index');                 // 注册页
    Route::post('/register', 'Admin\Auth\RegisterController@register')->name('register');                   // 注册动作
    Route::delete('/logout', 'Admin\Auth\LoginController@logout')->name('logout');                          // 注销动作
    Route::get('/password/reset', 'Admin\Auth\ResetController@index')->name('password.reset.index');        // 密码重置页
    Route::post('/password/reset', 'Admin\Auth\ResetController@reset')->name('password.reset');             // 密码重置动作
    Route::get('/', 'Admin\IndexController@index')->name('home');                                           // 后台首页
});
