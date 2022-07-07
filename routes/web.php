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
    return redirect()->route('list_material');
});

Route::prefix('materials')->group(function () {

    Route::get('/list', 'MaterialController@index')->name('list_material');
    Route::get('/create', 'MaterialController@create_view')->name('create_material');
    Route::post('/create_materials', 'MaterialController@create')->name('create_m');
    Route::post('/edit_materials', 'MaterialController@edit')->name('edit_m');
    Route::get('/delete_materials', 'MaterialController@delete')->name('delete_m');
    Route::get('/edit/{id}', 'MaterialController@edit_view')->name('edit_material');
    Route::get('/view/{id}', 'MaterialController@view')->name('view_material');

    Route::get('/search', 'MaterialController@search')->name('search_m');
});