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

Route::get('/makers', 'ReviewController@maker');
Route::get('/reviews', 'ReviewController@index');
Route::get('/reviews/create','ReviewController@create');
Route::get('/reviews/{review}/edit', 'ReviewController@edit');
Route::put('/reviews/{review}', 'ReviewController@update');
Route::delete('/reviews/{review}', 'ReviewController@destroy');
Route::get('/reviews/{review}', 'ReviewController@show');
Route::post('/reviews', 'ReviewController@store');
Route::get('/makers/{maker}', 'MakerController@index');