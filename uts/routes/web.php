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

Route::get('about', 'PagesController@about');
Route::get('index', 'MhsController@index');
Route::get('mahasiswa', 'MhsController@index');
Route::get('mahasiswa/create', 'MhsController@create');
Route::post('mahasiswa', 'MhsController@store');
Route::get('mahasiswa/{Mahasiswa}', 'MhsController@show');
Route::get('mahasiswa/{Mahasiswa}/edit', 'MhsController@edit');
Route::patch('mahasiswa/{Mahasiswa}/', 'MhsController@update');
Route::delete('mahasiswa/{Mahasiswa}', 'MhsController@destroy');

