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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('warning', 'WarningController@warning');

Route::group(['prefix'=>'admin'], function(){
		Route::get('pesanan', 'PesananController@getPesanan');
		Route::get('pesanan/{id}/reject', 'PesananController@update_reject');
		Route::get('pesanan/{id}/accept','PesananController@update_accept');
		Route::get('pesanan/{id}/destroy','PesananController@destroy');
		Route::get('pesanan/{id}/hapus','PesananController@hapus');
		Route::get('pesanan/search','PesananController@search');
		Route::get('pesanan/report','PesananController@report');
		Route::get('pesanan/bulan','PesananController@bulan');
		Route::get('pesanan/inputkue','PesananController@inputkue');
		Route::get('pesanan/datakue','PesananController@datakue');
		Route::post('pesanan/inputkue/submit', 'KueController@submit');
});
Route::get('order', 'OrderController@getOrder');
Route::get('order/check', 'OrderController@checkOrder');
Route::get('pesan', 'UserController@getPesan');
Route::post('pesan/store', 'PemesananController@submit');



Route::get('/images/{filename}','ImageController@index');
Route::get('/img/{filename}','ImageController@index');
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');
Route::get('input/user','TestController@TestInput');
Route::get('userkue/{id}','WelcomeController@detailkue');
Route::post('userkue/submit2', 'PemesananController@submit2');