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
use App\Task;
/*
Route::group(['middleware' => ['web']], function () {
    Route::get('/','PostController@index');	
Route::get('/post/{post}','PostController@showPost');
Route::get('/posts/create','PostController@create');	
Route::post('/posts','PostController@store');
});*/

Route::get('/','PostController@index');	
Route::get('/post/{post}','PostController@showPost');
Route::get('/posts/create','PostController@create');	
Route::post('/posts','PostController@store');
Route::post('/post/{post}/comments','CommentsController@store');

