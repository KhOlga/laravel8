<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\EnsureTokenIsValid;

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

Route::view('/', 'welcome')->name('welcome')
	->withoutMiddleware([EnsureTokenIsValid::class]);

Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    	return view('dashboard');
	})->name('dashboard')->withoutMiddleware([EnsureTokenIsValid::class]);


Route::fallback(function () {
	return view('errors.404');
});