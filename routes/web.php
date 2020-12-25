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

// Route::get('/', function () {
// 	return view('layout');
// });

Route::get('/', 'HomeController@index');

Route::get('contact_us', 'ContactController@contact');

Route::post('sendmessage', 'ContactController@sendmessage');

Route::get('about', 'AboutController@index');

Route::get('post', 'PostController@index');

Route::post('add_post', 'PostController@save_post');

Route::get('available_rooms', 'Available_roomController@index');

Route::get('admin_post', 'AdminPost@index');

Route::get('delete_post/{id}','AdminController@delete_post');


//admin route

Route::get('admin', 'AdminController@index');

Route::get('dashboard', 'AdminController@show_dashboard');

Route::get('all_post', 'AdminController@all_post');

Route::get('inactive_post/{id}', 'AdminController@inactive_post');

Route::get('active_post/{id}', 'AdminController@active_post');
