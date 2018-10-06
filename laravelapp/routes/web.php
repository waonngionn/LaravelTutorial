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

// hello
Route::get('hello', 'HelloController@index');

Route::get('hello/show', 'HelloController@show');

Route::get('hello/create', 'HelloController@add');
Route::post('hello/create', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/remove', 'HelloController@remove');
Route::post('hello/remove', 'HelloController@delete');


// person
Route::get('person', 'PersonController@index');
