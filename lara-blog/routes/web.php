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

Route::get('/show/{id}', [ //za show treba dat / inak showAll si mysli ze All je parameter zo show
    'as' => 'show', 'uses' => 'AutoController@showAction'
]);

Route::get('/showInsert-form', [
    'as' => 'showInsert-form', 'uses' => 'AutoController@showInsertFormAction'
]);

//pouzivame metodu post v addAuto.blade
//je prepojena s addAuto.blade neviem preco
Route::post('/insert', [
    'as' => 'insert', 'uses' => 'AutoController@insertAction'
]);

Route::post('/update/{id}', [
    'as' => 'update', 'uses' => 'AutoController@updateAction'
]);

Route::get('/delete/{id}', [
    'as' => 'delete', 'uses' => 'AutoController@deleteAction'
]);

Route::get('/showAll', [
    'as' => 'showAll', 'uses' => 'AutoController@showAllAuta'
]);
