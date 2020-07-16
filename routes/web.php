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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'PagesController@index');
Route::resource('/posts', 'PostsController');
Route::resource('/projects', 'ProjectsController');
Route::resource('/skills', 'SkillsController');
Route::resource('/items', 'ItemsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
