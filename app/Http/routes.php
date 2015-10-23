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

Route::get('/', 'PagesController@index');

Route::get('/articles', [
	'as'   => 'article.index',
	'uses' => 'ArticleController@index'

]);

get('/articles/create',[
	'as'   => 'article.create',
	'uses' => 'ArticleController@create'
]);

post('/articles',[
	'as'   => 'article.store',
	'uses' => 'ArticleController@store'
]);

get('/articles/{id}/edit',[
	'as'   => 'article.edit',
	'uses' => 'ArticleController@edit'
]);

put('/articles/{id}',[
	'as'   => 'article.update',
	'uses' => 'ArticleController@update'
]);

delete('articles/{id}',[
	'as'   => 'article.destroy',
	'uses' => 'ArticleController@destroy'
]);

Route::get('/articles/{id}',[
	'as'   => 'article.show',
	'uses' => 'ArticleController@show'
]);
