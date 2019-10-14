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
 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('usuarios')->middleware('auth')->group(function() {
    Route::get('/', 'UsersController@index')->name('users.index');
});


Route::get('/clientes', 'ClientesController@index')->name('clientes.index');
Route::get('/clientes/novo', 'ClientesController@create')->name('clientes.create')->middleware('auth');
Route::post('/clientes', 'ClientesController@store')->name('clientes.store')->middleware('auth');
Route::get('/clientes/edit/{id}', 'ClientesController@edit')->name('clientes.edit')->middleware('auth');
Route::any('/clientes/{id}', 'ClientesController@update')->name('clientes.update')->middleware('auth');
Route::delete('/clientes/{id}', 'ClientesController@destroy')->name('clientes.destroy')->middleware('auth');