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

Route::get('/', 'CrudController@index')->name('route');
Route::get('/edit/{item}', 'CrudController@edit')->name('edit');
Route::patch('/edit/{item}', 'CrudController@update')->name('update');
Route::get('/hapus/{item}', 'CrudController@destroy')->name('hapus');
Route::get('/tambah', 'CrudController@create')->name('tambah');
Route::post('/tambah', 'CrudController@store')->name('store');
