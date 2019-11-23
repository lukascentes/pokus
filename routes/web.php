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
Route::get('/spravy', 'FrontController@display_a');
Route::get('/sprava1', 'FrontController@sprava1');
Route::post('/checklogin', 'FrontController@checklogin');
Route::get('/successlogin', 'FrontController@successlogin');
Route::get('/logout', 'FrontController@logout');
Route::get('/admin', 'FrontController@admin');
Route::get('/calendar', 'FrontController@calendar');
Route::get('uzivatelia', ['as'=>'uzivatelia','uses'=>'FrontController@uzivatelia']);
Route::get('destinations', ['as'=>'destinations','uses'=>'FrontController@destinations']);
Route::get('spravyadmin', ['as'=>'spravyadmin','uses'=>'FrontController@spravyadmin']);
Route::get('works', ['as'=>'works','uses'=>'FrontController@works']);
Route::post('/insert', ['as' => 'insert', 'uses' => 'UserController@insertAction']);
Route::get("/show-users", "UserController@showAllAction");
Route::get('/show/{id}', ['as' => 'show','uses' => 'UserController@showAction']);
Route::post("update-user/{id}", "UserController@updateAction");
Route::get('/delete/{id}', ['as' => 'delete','uses' => 'UserController@deleteAction']);
Route::get("/insert-user", "UserController@getAddUserForm");

Route::get("/insert-destination", "DestinationsController@getAddDestinationForm");
Route::post('/insertdestination', ['as' => 'insert', 'uses' => 'DestinationsController@insertAction']);
Route::post("update-destination/{id}", "DestinationsController@updateAction");
Route::get('/deletedestination/{id}', ['as' => 'delete','uses' => 'DestinationsController@deleteAction']);
Route::get("/show-destinations", "DestinationsController@showAllAction");
Route::get('/showdestinations/{id}', ['as' => 'show','uses' => 'DestinationsController@showDestinationAction']);



// pobyty a staze routes

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







//Prihlaseny pouzivatel routes

Route::get('/usa_prihlaseny', 'FrontController@usa_prihlaseny');
//Route::get('/gallery', 'FrontController@gallery');

Route::get('/kazachstan_prihlaseny', 'FrontController@kazachstan_prihlaseny');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/malajzia_prihlaseny', 'FrontController@malajzia_prihlaseny');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/rusko_prihlaseny', 'FrontController@rusko_prihlaseny');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/britain_prihlaseny', 'FrontController@britain_prihlaseny');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/hong_kong_prihlaseny', 'FrontController@hong_kong_prihlaseny');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/taiwan_prihlaseny', 'FrontController@taiwan_prihlaseny');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/polsko_prihlaseny', 'FrontController@polsko_prihlaseny');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/cina_prihlaseny', 'FrontController@cina_prihlaseny');
//Route::get('/gallery', 'FrontController@gallery'); chyba

Route::get('/registration', 'FrontController@registration');

Route::get('/login', 'FrontController@login');

Route::get('/master_prihlaseny', 'FrontController@master_prihlaseny');
Route::get('/studijnepobyty_prihlaseny', 'FrontController@studijnepobyty_prihlaseny');
Route::get('/work_prihlaseny', 'FrontController@work_prihlaseny');

Route::get('/spravy_prihlaseny', 'FrontController@display');

Route::get('/odhlasit_prihlaseny', 'FrontController@odhlasit_prihlaseny');

Route::get('/pridatspravu', 'FrontController@pridatspravu');
Route::post('/pridatspravu', 'FrontController@store')->name('addimage');




