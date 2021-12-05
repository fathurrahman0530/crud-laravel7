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
    return view('dashboard.index');
});

Route::get('crud', 'CrudController@index')->name('crud');
Route::get('crud/insert', 'CrudController@insert')->name('crud.insert');
Route::get('crud/save', 'CrudController@save')->name('crud.save');
