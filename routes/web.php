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

//Paginas'
Route::get('/', 'PagesController@getIndex');
Route::get('/homeopathie', 'PagesController@getHomeopathie');
Route::get('/behandelingen', 'PagesController@getBehandelingen');
Route::get('/praktijk', 'PagesController@getPraktijk');
Route::get('/wiebenik', 'PagesController@getWiebenik');
Route::get('/kosten', 'PagesController@getKosten');
Route::get('/contact', 'PagesController@getContact');

//behandelingen
Route::get('/behandeling_1', 'PagesController@behandeling_1');
Route::get('/behandeling_2', 'PagesController@behandeling_2');
Route::get('/behandeling_3', 'PagesController@behandeling_3');
Route::get('/behandeling_4', 'PagesController@behandeling_4');

//Backend
Route::get('/homebewerken', 'IndexController@edit')->name('index.edit');
Route::put('/homebewerken', 'IndexController@update')->name('index.update');

Route::get('/homeopathiebewerken', 'HomeopathieController@edit')->name('homeopathie.edit');
Route::put('/homeopathiebewerken', 'HomeopathieController@update')->name('homeopathie.update');

Route::get('/praktijkbewerken', 'PraktijkController@edit')->name('praktijk.edit');
Route::put('/praktijkbewerken', 'PraktijkController@update')->name('praktijk.update');

Route::get('/behandelingenbewerken', 'BehandelingenController@edit')->name('behandelingen.edit');
Route::put('/behandelingenbewerken', 'BehandelingenController@update')->name('behandelingen.update');

Route::get('/kostenbewerken', 'KostenController@edit')->name('kosten.edit');
Route::put('/kostenbewerken', 'KostenController@update')->name('kosten.update');

Route::get('/contactbewerken', 'ContactController@edit')->name('contact.edit');
Route::put('/contactbewerken', 'ContactController@update')->name('contact.update');


//Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


