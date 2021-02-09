<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\App;
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

Route::get('/greeting', function () {
	//
});

Route::view('/', 'welcome')->name('welcome')
	->withoutMiddleware([EnsureTokenIsValid::class]);

//TODO: add Route::get('/photos/popular', [PhotoController::class, 'popular']);
Route::resources([
	'photos' => 'PhotoController',
	'teams' => 'TeamController'
]);

Route::resource('tasks', 'TaskController');
Route::resource('tasks.comments', 'TaskCommentController')
	->scoped([
		'comment' => 'slug',
	]);
Route::resource('tasks.comments', 'CommentController')->shallow();

Route::fallback(function () {
	return view('errors.404');
});
