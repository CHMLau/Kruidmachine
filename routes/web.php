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

Route::get('/kruid','KruidController@show');
Route::get('/kruid/nieuw','KruidController@create');
Route::post('/kruid/nieuw','KruidController@store');

Route::get('/kruid/edit/{kruid}','KruidController@edit')->name('editkruid');
Route::patch('/kruid/edit/{kruid}','KruidController@update');
Route::delete('/kruid/edit/{kruid}','KruidController@destroy');

Route::get('/allemixes','MixController@show');
Route::get('/mix','MixController@show_gebruikerMix');
Route::get('/mix/nieuw','MixController@create');
Route::post('/mix/nieuw','MixController@store');

Route::get('/mix/edit/{mix}', 'MixController@edit')->name('editmix');
Route::patch('/mix/edit/{mix}' , 'MixController@update');
Route::delete('/mix/edit/{mix}','MixController@destroy');

Route::get('/account','AccountController@show');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


