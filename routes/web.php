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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::match(['get', 'post'], '/', ['as' => '/', 'uses' => 'frontend\HomeController@dashboard']);
Route::get('/', 'frontend\HomeController@dashboard');
//login controller
Route::match(['get', 'post'], 'login', ['as' => 'login', 'uses' => 'admin\LoginController@login']);
Route::match(['get', 'post'], 'signup', ['as' => 'signup', 'uses' => 'admin\LoginController@signup']);
Route::match(['get', 'post'], 'forgotpassword', ['as' => 'forgotpassword', 'uses' => 'admin\LoginController@forgotpassword']);


Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'frontend\HomeController@dashboard']);