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



Auth::routes(['verify' => true]);


Route::get('/agreement', 'HomeController@agreement')->name('agreement');
Route::get('/tokutei', 'HomeController@tokutei')->name('tokutei');
Route::get('/policy', 'HomeController@policy')->name('policy');


Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact/sendmail', 'ContactController@sendmail')->name('contact.sendmail');

Route::get('/mypage', 'MypageController@index')->name('mypage');
Route::post('/mypage/{id}', 'MypageController@update')->name('mypage.update');
Route::get('/changepassword', 'MypageController@showChangePasswordForm');
Route::post('/changepassword', 'MypageController@changePassword')->name('changepassword');


Route::get('/session', 'SessionController@show')->name('session');
Route::get('/session/{id}', 'SessionController@detail')->name('session.detail');
Route::post('/session/update/{id}', 'SessionController@update')->name('session.update');


Route::get('/charge/{course_cd}', 'ChargeController@index')->name('charge');
Route::post('/charge/createsub', 'ChargeController@createSub')->name('charge.createsub');
Route::get('/charge/paycomplete', 'ChargeController@paycomplete')->name('paycomplete');

Route::post('/opinion/sendmail', 'OpinionController@sendmail')->name('opinion.sendmail');

Route::get('/sitemap', 'SiteMapController@sitemap'); 