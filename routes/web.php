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


Route::group(['middleware'=>'admin'], function(){
	Route::get('admin', 'AdminController@index');
	Route::get('admin/user', 'AdminController@listuser');
	Route::get('admin/newuser', 'AdminController@newuser');
	Route::post('admin/saveuser', 'AdminController@saveuser');
	Route::get('admin/edituser/{id}', 'AdminController@edituser');
	Route::post('admin/updateuser', 'AdminController@updateuser');
	Route::get('admin/deleteuser/{id}', 'AdminController@deleteuser');

	Route::get('admin/category', 'AdminController@listcategory');
	Route::get('admin/newcategory', 'AdminController@newcategory');
	Route::post('admin/savecategory', 'AdminController@savecategory');
	Route::get('admin/editcategory/{id}', 'AdminController@editcategory');
	Route::post('admin/updatecategory', 'AdminController@updatecategory');
	Route::get('admin/deletecategory/{id}', 'AdminController@deletecategory');
});

Route::group(['middleware'=>'auth'], function(){
	Route::get('members', 'MemberController@index');
	Route::get('members/myads', 'MemberController@listproduct');
	Route::get('members/new', 'MemberController@newproduct');
	Route::post('members/save', 'MemberController@saveproduct');
	Route::get('members/edit/{id}', 'MemberController@editproduct');
	Route::get('members/delete/{id}', 'MemberController@deleteproduct');
	Route::post('members/update', 'MemberController@updateproduct');
	Route::get('members/profile', 'MemberController@profile');
	Route::post('members/updateprofile', 'MemberController@updateprofile');
	Route::get('members/products', 'ProductController@index');
Route::get('/home', 'HomeController@index')->name('home');

	});

Route::get('ads', 'ProductController@index');
Auth::routes();


Route::get('/', 'FrontendController@index');