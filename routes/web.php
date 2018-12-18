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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cart/update/{id}', 'CartController@update');

//Route::get('/projects','ProjectsController@index'):

Route::resource('/user','UserController@index');

//Route::get('/', function (){
//	return view('user');
//});

Route::get('/dashboard', [
	'as' => 'home' ,
	'uses' => 'LoginController@home' 
]);

Route::get('/prod', [
	'as' => 'prod.view' ,
	'uses' => 'ProductController@viewProd' 
]);
