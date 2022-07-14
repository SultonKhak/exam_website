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

Route::get('/', function () {
    return redirect('/homepage');

});
Route::get('/homepage', 'HomeController@home');

//About us
Route::get('/homepage/about', 'HomeController@aboutus');

//detail
Route::get('/homepage/{article_id}/detail','HomeController@detail');

//category
Route::get('/homepage/categories', 'HomeController@list_category');
Route::get('/homepage/categories/{category_id}', 'HomeController@show_category');

//register
Route::get('/register', 'RegisterController@view');
Route::post('/register', 'RegisterController@user');

//login
Route::get('/login','LoginController@form');
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');
Route::get('/welcome','LoginController@welcome');

//edit profile
Route::get('/profile','UserController@edit');
Route::patch('/profile','UserController@edited');

//blog menu
Route::get('/blog','UserController@blog');
Route::delete('/blog/{article_id}','UserController@delete');
Route::get('/blog/add','UserController@formblog');
Route::post('/blog/add','UserController@add');

//userAdmin
Route::get('/homepage/admin/user-list', 'AdminController@user_list');
Route::delete('/homepage/profile/{user_id}', 'AdminController@delete');

