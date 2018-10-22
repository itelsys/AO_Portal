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

/*Route::get('/', function () {
    return view('AO');
});*/
Route::get('/', 'AOController@index');
Route::get('/AO', 'AOController@index');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/download', 'AOController@getDownload');
Route::get('/Profile', 'ProfileController@index')->middleware('auth');
Route::get('/Create', 'AOController@create');
Route::post('/Create', 'AOController@store');
Route::get('/Create/insert', 'AOController@insert');
Route::post('/', 'AbonnementController@store');
Route::post('/', 'VersionController@store');
Route::delete('Abonnement/destroy', 'AbonnementController@destroy');
Route::get('/acheteur', 'AcheteurController@create');
Route::post('/acheteur', 'AcheteurController@store');