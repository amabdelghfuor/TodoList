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



Route::get('/todos','TodoController@index')->name('todos');

Route::post('/todo/store','TodoController@store')->name('todo.store');

Route::put('/todo/update/{id}','TodoController@update')->name('todo.update');

Route::get('/todo/destroy/{id}','TodoController@destroy')->name('todo.destroy');

