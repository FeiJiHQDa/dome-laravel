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
    return view('welcome');
});

/************************* 简单的 from 表单 *************************/
Route::any('form/create', 'Dome\FormController@create');
Route::any('form/index', 'Dome\FormController@index');
Route::any('form/detail/{id}', 'Dome\FormController@detail');
Route::any('form/update/{id}', 'Dome\FormController@update');
Route::any('form/delete/{id}', 'Dome\FormController@delete');


Route::post('dome/pod/store', 'Dome\PodcastController@store');