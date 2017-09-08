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
Route::get('/auth',function(){
    /*$user = \App\User::find(1);
        Auth::login($user);     */
    if(Auth::attempt(['email'=>'tadeu.parreiras@gmail.com','password'=>'81215122'])){
       return 'oi'; 
    }
    else{
        return 'falhou';
    }
     //dd(session()->all());
     if(Auth::check()){
         return 'autenticado';
     }
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
/*Route::get('/auth/login','Auth\AuthController@getLogin');
Route::get('/auth/logout',function(){
    
        Auth::logout();     
     //dd(session()->all());
     
});*/

/*Route::get('admin', 'PostAdminController@index');
Route::get('admin/create', 'PostAdminController@create');*/
Route::group(['prefix'=>'admin', 'middleware' => 'auth'],function(){
    
    Route::group(['prefix'=>'posts'], function(){
        Route::get('',['as'=> 'admin.posts.index' , 'uses' => 'PostAdminController@index'] );
        Route::get('create',['as'=> 'admin.posts.create' , 'uses' => 'PostAdminController@create'] );
        Route::post('store',['as'=> 'admin.posts.store' , 'uses' => 'PostAdminController@store'] );
        Route::get('edit/{id}',['as'=> 'admin.posts.edit' , 'uses' => 'PostAdminController@edit'] );
        Route::put('update/{id}',['as'=> 'admin.posts.update' , 'uses' => 'PostAdminController@update'] );
        Route::get('delete/{id}',['as'=> 'admin.posts.delete' , 'uses' => 'PostAdminController@destroy'] );       
        
    });    
    
});



