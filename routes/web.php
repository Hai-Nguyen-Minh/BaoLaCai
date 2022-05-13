<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Models\Categories;
$cate = Categories::all();


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
Route::get('/', 'ArticleController@index');
Route::get('/login', 'UserController@loginForm');
Route::post('/login', 'UserController@login');
Route::get('/register', 'UserController@register');
Route::post('/register', 'UserController@store');
Route::get('/logout', 'UserController@logout');
Route::resource('/post', 'ArticleController');
Route::get('/category/{id_category}', 'ArticleController@searchCategory');
Route::get('/article/{id_news}', 'ArticleController@showNews');
Route::post('/search', 'ArticleController@search');
Route::get('/cate', 'CategoryController@getCategory');