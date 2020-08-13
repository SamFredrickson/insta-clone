<?php

use Illuminate\Support\Facades\Route;

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




Auth::routes();

Route::post('follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create')->name('posts.create');
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/p/{post}', 'PostsController@show')->name('posts.show');
Route::post('/p', 'PostsController@store');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profiles.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profiles.update');


