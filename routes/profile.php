<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
|
| Here is where you can register profile routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@index')
    ->name('dashboard')
    ->middleware(['auth', 'verified']);

Route::group(['prefix' => 'tasks', 'as' => 'tasks.'], function () {
    Route::get('/', 'TaskController@index')->name('index');
    Route::get('/create', 'TaskController@create')->name('create');
    Route::post('/create', 'TaskController@store')->name('store');
    Route::get('/{task:title}', 'TaskController@show')->name('show');
    /*Route::get('/{task:title}', function (App\Models\Task $task) {
        return $task;
    });*/
});

Route::fallback(function () {
	return abort(404);
});
