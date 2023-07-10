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
Route::get('/gudang', 'GudangController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gudang/create', 'GudangController@create'); 
Route::post('/gudang', 'GudangController@store');

Route::get('gudang/{id}/edit', 'GudangController@edit');
Route::patch('gudang/{id}', 'GudangController@update');
Route::delete('gudang/{id}', 'GudangController@destroy');

Route::get('gudang/search','GudangController@search')->name('search');