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
//Route::match(['get', 'post'], 'login', ['as' => 'login', 'uses' => 'admin\LoginController@login']);
//Route::match(['get', 'post'], 'signup', ['as' => 'signup', 'uses' => 'admin\LoginController@signup']);
//Route::match(['get', 'post'], 'forgotpassword', ['as' => 'forgotpassword', 'uses' => 'admin\LoginController@forgotpassword']);


Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'frontend\HomeController@dashboard']);
Route::match(['get', 'post'], 'services', ['as' => 'services', 'uses' => 'frontend\ServicesController@services']);
Route::match(['get', 'post'], 'portfolio', ['as' => 'portfolio', 'uses' => 'frontend\PortfolioController@portfolio']);
Route::match(['get', 'post'], 'aboutus', ['as' => 'aboutus', 'uses' => 'frontend\AboutusController@aboutus']);
Route::match(['get', 'post'], 'contactus', ['as' => 'contactus', 'uses' => 'frontend\ContactusController@contactus']);
Route::match(['get', 'post'], 'blog', ['as' => 'blog', 'uses' => 'frontend\BlogController@blog']);
 

Route::match(['get', 'post'], 'admin', ['as' => 'admin', 'uses' => 'backend\LoginController@login']);
Route::match(['get', 'post'], 'createPassword', ['as' => 'createPassword', 'uses' => 'backend\LoginController@createPassword']);
Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'backend\LoginController@getLogout']);
$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
    
Route::match(['get', 'post'], 'admin-dashboard', ['as' => 'admin-dashboard', 'uses' => 'backend\dashboard\DashboardController@dashboard']);

});
