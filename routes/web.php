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
//Route::get('/', 'frontend\HomeController@dashboard');
//login controller
//Route::match(['get', 'post'], 'login', ['as' => 'login', 'uses' => 'admin\LoginController@login']);
//Route::match(['get', 'post'], 'signup', ['as' => 'signup', 'uses' => 'admin\LoginController@signup']);
//Route::match(['get', 'post'], 'forgotpassword', ['as' => 'forgotpassword', 'uses' => 'admin\LoginController@forgotpassword']);

//testing email
Route::match(['get', 'post'], 'testingmail', ['as' => 'testingmail', 'uses' => 'LoginController@testingmail']);

//slider

Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\HomeController@dashboard']);
Route::match(['get', 'post'], 'services', ['as' => 'services', 'uses' => 'frontend\ServicesController@services']);
Route::match(['get', 'post'], 'portfolio', ['as' => 'portfolio', 'uses' => 'frontend\PortfolioController@portfolio']);
Route::match(['get', 'post'], 'portfolioreadmore/{id}', ['as' => 'portfolioreadmore', 'uses' => 'frontend\PortfolioController@readmore']);
Route::match(['get', 'post'], 'aboutus', ['as' => 'aboutus', 'uses' => 'frontend\AboutusController@aboutus']);
Route::match(['get', 'post'], 'contactus', ['as' => 'contactus', 'uses' => 'frontend\ContactusController@contactus']);

Route::match(['get', 'post'], 'blog', ['as' => 'blog', 'uses' => 'frontend\BlogController@blog']);
Route::match(['get', 'post'], 'blogreadmore', ['as' => 'blogreadmore', 'uses' => 'frontend\BlogController@readmore']);

Route::match(['get', 'post'], 'features', ['as' => 'features', 'uses' => 'frontend\FeaturesController@features']);
 

Route::match(['get', 'post'], 'admin', ['as' => 'admin', 'uses' => 'backend\LoginController@login']);
Route::match(['get', 'post'], 'createPassword', ['as' => 'createPassword', 'uses' => 'backend\LoginController@createPassword']);
Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'backend\LoginController@getLogout']);
$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
    
Route::match(['get', 'post'], 'admin-dashboard', ['as' => 'admin-dashboard', 'uses' => 'backend\dashboard\DashboardController@dashboard']);

//slider
Route::match(['get', 'post'], 'slider', ['as' => 'slider', 'uses' => 'backend\slider\SliderController@slider']);
Route::match(['get', 'post'], 'slider-ajaxAction', ['as' => 'slider-ajaxAction', 'uses' => 'backend\slider\SliderController@ajaxAction']);
Route::match(['get', 'post'], 'editsilder', ['as' => 'editsilder', 'uses' => 'backend\slider\SliderController@editslider']);

//Projec Type
Route::match(['get', 'post'], 'project-type', ['as' => 'project-type', 'uses' => 'backend\project_type\project_typeController@index']);
Route::match(['get', 'post'], 'project-type-ajaxAction', ['as' => 'project-type-ajaxAction', 'uses' => 'backend\project_type\project_typeController@ajaxAction']);
Route::match(['get', 'post'], 'editproject-type', ['as' => 'editproject-type', 'uses' => 'backend\project_type\project_typeController@editproject_type']);

//Portfolio
Route::match(['get', 'post'], 'admin-portfolio', ['as' => 'admin-portfolio', 'uses' => 'backend\portfolio\PortfolioController@index']);
Route::match(['get', 'post'], 'portfolio-ajaxAction', ['as' => 'portfolio-ajaxAction', 'uses' => 'backend\portfolio\PortfolioController@ajaxAction']);
Route::match(['get', 'post'], 'editportfolio/{id}', ['as' => 'editportfolio', 'uses' => 'backend\portfolio\PortfolioController@editportfolio']);
Route::match(['get', 'post'], 'addportfolio', ['as' => 'addportfolio', 'uses' => 'backend\portfolio\PortfolioController@addportfolio']);

//Blog
Route::match(['get', 'post'], 'admin-blog-category', ['as' => 'admin-blog-category', 'uses' => 'backend\blog\BlogController@index']);
});
