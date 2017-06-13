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

Route::get('/', ['uses'=>'MainContr@index','as'=>'index'] );
Route::get('/article/{id}', ['uses'=>'MainContr@article','as'=>'article'] );
Route::get('/article', ['uses'=>'MainContr@articleAll','as'=>'articleAll'] );

// Маршруты аутентификации...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Маршруты регистрации...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');





Route::group(['prefix'=>'adminka'] , function(){
    Route::get('/',['uses'=>'Admin\AdminMainContr@main' , 'as'=>'mainHome']);
    Route::get('article', ['uses'=>'Admin\AdminMainContr@articleList' , 'as'=>'articleList']);
    Route::post('article/new', ['uses'=>'Admin\AdminMainContr@articleNew' , 'as'=>'articalNew']);
    Route::get('article/new', ['uses'=>'Admin\AdminMainContr@articleNewViwe' , 'as'=>'articalNewView']);
    Route::get('article/edit/{id}', ['uses'=>'Admin\AdminMainContr@articleEdit' , 'as'=>'articalEdit']);
    Route::get('article/del/{id}', ['uses'=>'Admin\AdminMainContr@articleDel' , 'as'=>'articalDel']);

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
