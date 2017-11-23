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
Route::get('getToken', 'PublicController@getToken');
Route::post('updateToken', 'AdminController@configEdit');
#Temporarily having token here
Route::post('updateFCMToken', 'PublicController@updateFCMToken');
#Temporarily having token here
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Controller@logout']);
#Cron
Route::get('cron', 'CronController@index');
Route::get('test', 'Controller@test');
Route::get('testFCM', 'PublicController@testFCM');
#Admin Panel
Route::get('admin/dashboard', 'AdminController@index');
#Start of Blog
Route::get('admin/blog', 'AdminController@blog')->name('blog');;
Route::get('admin/blog/create', 'AdminController@blogCreate');
Route::post('admin/blog/write', 'AdminController@blogCreateData');
Route::get('admin/blog/edit/{id}', 'AdminController@blogEdit');
Route::post('admin/blog/edit/update', 'AdminController@blogUpdateData');
Route::get('admin/blog/status/{id}/{status}', 'AdminController@blogStatus');
Route::get('admin/blog/delete/{id}', 'AdminController@blogDelete');
#End of Blog
#Start of Tag
Route::get('admin/tag', 'AdminController@tag')->name('tag');
Route::get('admin/tag/create', 'AdminController@tagCreate');
Route::post('admin/tag/write', 'AdminController@tagCreateData');
Route::get('admin/tag/edit/{id}', 'AdminController@tagEdit');
Route::post('admin/tag/edit/update', 'AdminController@tagUpdateData');
Route::get('admin/tag/delete/{id}', 'AdminController@tagDelete');
#End of Tag
#Start of Contact Mail
Route::get('admin/contacts', 'AdminController@contacts');
#End of Contact Mail
#Start of Settings
#Start of Config
Route::get('admin/config', 'AdminController@config')->name('config');
Route::get('admin/config/create', 'AdminController@configCreate');
Route::post('admin/config/write', 'AdminController@configCreateData');
Route::get('admin/config/edit/{id}', 'AdminController@configEdit');
Route::post('admin/config/edit/update', 'AdminController@configUpdateData');
Route::get('admin/config/status/{id}/{status}', 'AdminController@configStatus');
Route::get('admin/config/delete/{id}', 'AdminController@configDelete');
#End of Config
#Start of Reminder
Route::get('admin/reminder', 'AdminController@reminder')->name('reminder');
Route::get('admin/reminder/create', 'AdminController@reminderCreate');
Route::post('admin/reminder/write', 'AdminController@reminderCreateData');
Route::get('admin/reminder/edit/{id}', 'AdminController@reminderEdit');
Route::post('admin/reminder/edit/update', 'AdminController@reminderUpdateData');
Route::get('admin/reminder/status/{id}/{status}', 'AdminController@reminderStatus');
Route::get('admin/reminder/delete/{id}', 'AdminController@reminderDelete');
#End of Reminder
#End of Admin Panel
#Start of API
Route::post('api/authUser', 'PublicController@authUser');
Route::get('api/getBlog', 'ApiController@getBlog');
Route::get('api/logout', 'PublicController@logout');
#End of API

#Maintenance 
Route::get('SyncBlogCount', 'AdminController@SyncBlogCount');