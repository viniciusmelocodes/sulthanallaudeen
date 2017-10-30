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

Route::get('/', 'PublicController@index');
Route::get('blog', 'PublicController@blogs');
Route::get('blog/{query}', 'PublicController@blog');
Route::post('searchBlog', 'PublicController@searchBlog');
Route::get('tag/{query}', 'PublicController@tag');
Route::get('tag/{query}/about', 'PublicController@tagAbout');
Route::get('contact', 'PublicController@contact');
Route::post('contactSA', 'PublicController@contactSA');
Route::get('login', [ 'as' => 'login', 'uses' => 'PublicController@login']);
Route::post('doLogin', 'PublicController@doLogin');
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Controller@logout']);
#Admin Panel
Route::get('admin/dashboard', 'AdminController@index');
#Blog
Route::get('admin/blog', 'AdminController@blog')->name('blog');;
Route::get('admin/blog/create', 'AdminController@blogCreate');
Route::post('admin/blog/write', 'AdminController@blogCreateData');
Route::get('admin/blog/edit/{id}', 'AdminController@blogEdit');
Route::post('admin/blog/edit/update', 'AdminController@blogUpdateData');
Route::get('admin/blog/delete/{id}', 'AdminController@blogDelete');
#Tag
Route::get('admin/tag', 'AdminController@tag');

#Maintenance 
Route::get('SyncBlogCount', 'AdminController@SyncBlogCount');