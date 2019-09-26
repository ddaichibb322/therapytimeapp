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

Route::get('/', 'TopController@index')->name('top');
Route::get('/plan', 'PlanController@index')->name('plan');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mypage', 'MypageController@index')->name('mypage');
Route::post('/mypage/{id}', 'MypageController@update')->name('mypage.update');

Route::get('/session', 'SessionController@list')->name('session');
Route::get('/session/{id}', 'SessionController@detail')->name('session.detail');


