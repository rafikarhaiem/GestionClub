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
    return view('CSC_Home');
});
Route::get('oldindex', function () {
    return view('oldindex');
});
Route::get('blog', function () {
    return view('blog-single');
});

/*Route::get('Ensat_CD', function () {
    return view('ECC_Home');
});*/

Route::get('Ensat_CD', 'InscriptionsCPC_Controller@getData');
Route::post('inscriptionCPC/submit', 'InscriptionsCPC_Controller@submit');

Route::post('contactus/submit', 'contactus_Controller@submit');

Auth::routes();
Route::get('EspaceMembre',function(){
  return view('auth/login');
});

Route::get('/home', 'HomeController@index')->name('home');
