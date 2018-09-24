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

Route::resource('/', 'ArticleController',['only'=>['index']]);

Route::resource('news', 'NewsController',['only'=>['index']]);

Route::resource('news', 'NewsController',['parametres'=>[
													
													'news'=>'title'
											   	]
											   	]);

Route::resource('articles', 'ArticleController',['parametres'=>[
													
													'articles'=>'title'
											   	
											   	]
												]);

//Route::resource('add_content', 'ArticleController');

Route::match(['get','post'],'contact',['uses'=>'ContactController@index','as'=>'contact']);

Route::auth('login', 'AuthController');
