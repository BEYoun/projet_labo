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
Route::get('presentation', ['as'=>'about','uses'=>'WelcomeController@about']);
Route::get('organigramme', ['as'=>'service','uses'=>'WelcomeController@organigramme']);
Route::get('services-administratifs-et-techniques', ['as'=>'projects','uses'=>'WelcomeController@service']);
Route::get('personnels', ['as'=>'blog','uses'=>'WelcomeController@personnels']);
Route::get('effectifs', ['as'=>'team','uses'=>'WelcomeController@effectifs']);
Route::get('distinctions', ['as'=>'singleTeamPage','uses'=>'WelcomeController@distinctions']);
Route::get('departements-equipes', ['as'=>'singleEquipePage','uses'=>'WelcomeController@departements_equipes']);
Route::get('projets', ['as'=>'projets','uses'=>'WelcomeController@projets']);
Route::get('parutions', ['as'=>'projets','uses'=>'WelcomeController@parutions']);
Route::get('publications', ['as'=>'projets','uses'=>'WelcomeController@publications']);
Route::get('these-publiees', ['as'=>'projets','uses'=>'WelcomeController@these_publiees']);
Route::get('collaborations-internationales', ['as'=>'collaborations-internationales','uses'=>'WelcomeController@collaborations_internationales']);
Route::get('ressources-documentaires', ['as'=>'ressources-documentaires','uses'=>'WelcomeController@ressources_documentaires']);
Route::get('ateliers-de-prototypage', ['as'=>'ateliers-de-prototypage','uses'=>'WelcomeController@ateliers_de_prototypage']);
Route::get('poles-de-plates-formes', ['as'=>'poles-de-plates-formes','uses'=>'WelcomeController@poles_de_plates_formes']);
Route::get('associations', ['as'=>'projets','uses'=>'WelcomeController@associations']);

Route::get('seminaires', ['as'=>'projets','uses'=>'WelcomeController@seminaires']);
Route::get('manifestations', ['as'=>'projets','uses'=>'WelcomeController@manifestations']);
Route::get('soutenances', ['as'=>'projets','uses'=>'WelcomeController@soutenances']);

Route::get('theses-en-cours', ['as'=>'projets','uses'=>'WelcomeController@theses_en_cours']);
Route::get('theses-soutenues', ['as'=>'projets','uses'=>'WelcomeController@theses_soutenues']);
Route::get('filieres-denseignements', ['as'=>'projets','uses'=>'WelcomeController@filieres_denseignements']);
Route::get('eacutecoles-doctorales', ['as'=>'projets','uses'=>'WelcomeController@eacutecoles_doctorales']);
Route::get('masters', ['as'=>'projets','uses'=>'WelcomeController@masters']);

Route::get('pdf', ['as'=>'pdf','uses'=>'WelcomeController@pdf']);


Route::get('home','HomeController@index');
Route::get('map','WelcomeController@map');
Route::get('/{var}','WelcomeController@service');



Route::group(['namespace'=>'SuperAdmin','middleware'=>'auth','prefix' => 'superAdmin'], function () {
	Route::controller('superProfesseurs', 'SuperProfesseursController');
    Route::resource('superProfesseurs', 'SuperProfesseursController');
    Route::resource('departements', 'DepartementsController');
    Route::resource('personnels', 'PersonnelsController');
    Route::resource('presentations', 'PresentationsController');
});
Route::group(['namespace'=>'Admin','middleware'=>'auth','prefix' => 'admin'], function () {
	Route::controller('professeurs', 'ProfesseursController');
    Route::resource('professeurs', 'ProfesseursController');
    //Route::resource('professeurs/store', 'ProfesseursController');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
