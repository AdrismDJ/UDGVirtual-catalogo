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

Route::get('/', function () {
return view('welcome'); 
});

Route::get('/index', 'App\Http\Controllers\MovieController@index');
Route::get('/index/create','App\Http\Controllers\MovieController@create'); 
Route::post('/index','App\Http\Controllers\MovieController@store'); 
Route::get('/index/{id}','App\Http\Controllers\MovieController@show');
Route::get('/index/{id}/edit','App\Http\Controllers\MovieController@edit');
Route::put('/index/{id}/edit','App\Http\Controllers\MovieController@update')->name('movie.update');
Route::delete('/index/{id}','App\Http\Controllers\MovieController@destroy'); 