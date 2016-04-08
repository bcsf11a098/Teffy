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

Route::group(['middleware'=>['web']],function(){
	Route::get('/', function () {
	    return view('welcome');
	});

	

	Route::get('/home', 'HomeController@index');
	Route::get('/home/{name}', 'HomeController@profileByName');
	Route::get('/profile/{id}', 'HomeController@profile');
	Route::post('/post', 'PostsController@store');
	Route::post('/updateAccount', 'HomeController@updateAccount');
	Route::post('/updatePwd', 'HomeController@updatePwd');
	Route::get('/showUpdatePage', 'HomeController@showUpdatePage');
	Route::get('/delete/{post}', 'PostsController@delete');
	Route::get('/like/{post}', 'LikesController@savePostLike');
	Route::get('/likeC/{comment}', 'LikesController@saveCommentLike');
	Route::get('/showUpdatePwdPage', 'HomeController@showUpdatePwdPage');
	// Route::post('/comment/{post}/{id}', 'CommentController@saveComment');
	Route::post('/comment/{post}', 'CommentController@savePostComment');
	Route::post('/commentC/{comment}', 'CommentController@saveCommentComment');

});
Route::auth();