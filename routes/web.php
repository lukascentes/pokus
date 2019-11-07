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

Route::get('/', 'FrontController@index');

Route::get('/studijnepobyty', 'FrontController@pobyty');
Route::get('/work', 'FrontController@work');

Route::get('/usa', 'FrontController@usa');
Route::get('/gallery', 'FrontController@gallery');

Route::get('/kazachstan', 'FrontController@kazachstan');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/malajzia', 'FrontController@malajzia');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/rusko', 'FrontController@rusko');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/britain', 'FrontController@britain');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/hong_kong', 'FrontController@hong_kong');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/taiwan', 'FrontController@taiwan');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/polsko', 'FrontController@polsko');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/cina', 'FrontController@cina');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/registration', 'FrontController@registration');
Route::get('/login', 'FrontController@login');
