<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home");
Route::get('/form-activity2', 'App\Http\Controllers\HomeController@create')->name("home.create");
Route::post('/form-activity2', 'App\Http\Controllers\HomeController@store')->name("home.store");
Route::get('/form-activity4', 'App\Http\Controllers\HomeController@list')->name("home.list");
Route::get('/form-activity4/list/{id}', 'App\Http\Controllers\HomeController@info')->name("home.info");
Route::post('/form-activity4/list/{id}', 'App\Http\Controllers\HomeController@delete')->name("home.delete");
