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

Route::get('/', ['as'=>'welcome','uses'=>'WelcomeController@index']);
Route::get('about', ['as'=>'about','uses'=>'WelcomeController@about']);
Route::get('service', ['as'=>'service','uses'=>'WelcomeController@service']);
Route::get('projects', ['as'=>'projects','uses'=>'WelcomeController@projects']);
Route::get('blog', ['as'=>'blog','uses'=>'WelcomeController@blog']);
Route::get('team', ['as'=>'team','uses'=>'WelcomeController@team']);
Route::get('singleTeamPage', ['as'=>'singleTeamPage','uses'=>'WelcomeController@singleTeamPage']);
Route::get('detailBlog', ['as'=>'detailBlog','uses'=>'WelcomeController@detailBlog']);
Route::get('home', 'HomeController@index');

Route::group(['namespace'=>'Admin','prefix' => 'admin'], function () {
	Route::controller('professeurs', 'ProfesseursController');
    	Route::resource('professeurs', 'ProfesseursController');
    //Route::resource('professeurs/store', 'ProfesseursController');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
