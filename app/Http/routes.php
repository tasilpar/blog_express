<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PostController@index');

/*Route::get('admin', 'PostAdminController@index');
Route::get('admin/create', 'PostAdminController@create');*/
Route::post('admin/posts/store',['as'=> 'admin.posts.store' , 'uses' => 'PostAdminController@store'] );
Route::get('admin',['as'=> 'admin.index' , 'uses' => 'PostAdminController@index'] );
Route::get('admin/posts/create',['as'=> 'admin.posts.create' , 'uses' => 'PostAdminController@create'] );

