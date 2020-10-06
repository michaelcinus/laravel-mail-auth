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

Auth::routes();

Route::get('/home', 'GuestController@index')->name('home');
Route::get('/mail/{id}', 'GuestController@show') -> name('show');

Route::get('/mail/delete/{id}', 'LoggedController@delete') -> name('delete');

Route::get('/create', 'LoggedController@create')->name('create');
Route::post('/create/store', 'LoggedController@store' ) -> name('store');

Route::get('/mail/edit/{id}', 'LoggedController@edit')->name('edit');
Route::post('/mail/update/{id}', 'LoggedController@update' ) -> name('update');



