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

//登陆页面
Route::get('/admin/login', 'AdminController@login');

//登陆操作
Route::post('/admin/login', 'AdminController@dologin');

//广告管理操作
Route::resource('advers', 'AdversController');

//轮播图管理
Route::resource('carousels', 'CarouselController');

//商品分类管理
Route::resource('gkinds', 'GkindsController');

Route::get('/admin', 'AdminController@index');

//用户管理
Route::resource('/user', 'UserController');


//商品管理
Route::resource('/good', 'GoodController');

//友链
Route::resource('/link', 'LinkController');

//网站设置
Route::get('/admin/setweb', 'AdminController@setweb');
Route::post('/admin/setweb', 'AdminController@update');

//商品详情
Route::resource('/gdetail', 'GdetailController');

//登陆页面
Route::get('/admin/login', 'AdminController@login');

//登陆操作
Route::post('/admin/login', 'AdminController@dologin');




//前台首页
Route::get('','RegisterController@show');


//前台注册
Route::resource('/register','RegisterController');

//前台登陆页面
Route::get('/home/login', 'HomeController@login');

//前台登陆操作
Route::post('/home/login', 'HomeController@dologin');

//个人中心
Route::get('/grzx','GrzxController@index');


//地址管理
Route::resource('/address','AddressController');