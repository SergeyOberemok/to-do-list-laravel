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
    return view('angular');
});

Route::get('/angular', function () {
    return view('angular');
});

Route::group(['prefix' => 'api', 'as' => 'api.'], function () {
    Route::group(['prefix' => 'tasks', 'as' => 'tasks.'], function () {
        Route::get('/', 'TaskController@index')->name('index');
        Route::post('/', 'TaskController@create')->name('create');
        Route::put('/{id}', 'TaskController@update')->name('update');
        Route::delete('/{id}', 'TaskController@destroy')->name('delete');
    });
});
