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
// derniere version
Route::get('/','MainController@index');

Route::get('old','MainController@oldIndex');

Route::get('index.html','MainController@index')->name('');

Route::get('Ensat_CD', 'InscriptionsCPC_Controller@getData');

Route::post('inscriptionCPC/submit', 'InscriptionsCPC_Controller@submit');

Route::post('contactus/submit', 'contactus_Controller@submit');

Auth::routes();

Route::get('/blog', 'ArticleController@index')->name('home');

Route::get('/EspaceMembre', 'HomeController@index')->name('home');

Route::get('/home','ArticleController@index');
