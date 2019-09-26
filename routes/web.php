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


Route::match(['get', 'post'], 'Dashboard', ['as' => 'Dashboard', 'uses' => 'frontend\HomeController@dashboard']);
Route::match(['get', 'post'], 'Services', ['as' => 'Services', 'uses' => 'frontend\ServicesController@services']);
Route::match(['get', 'post'], 'Portfolio', ['as' => 'Portfolio', 'uses' => 'frontend\PortfolioController@portfolio']);
Route::match(['get', 'post'], 'Aboutus', ['as' => 'Aboutus', 'uses' => 'frontend\AboutusController@aboutus']);
Route::match(['get', 'post'], 'Contactus', ['as' => 'Contactus', 'uses' => 'frontend\ContactusController@contactus']);
Route::match(['get', 'post'], 'Blog', ['as' => 'Blog', 'uses' => 'frontend\BlogController@blog']);