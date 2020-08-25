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





Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/default', function () {
	return View::make('pages.adm00n.mainpage');
});

Route::group(['middleware' => ['auth', 'roleCheck:admin']], function(){
	Route::get('/adm00n', 'Adm00nUploadController@upload');
	Route::post('/adm00n/process', 'Adm00nUploadController@upload_process');
	Route::get('/adm00n/delete/{id}', 'Adm00nUploadController@delete');
});

Route::group(['middleware' => ['auth', 'roleCheck:user, admin']], function(){
	Route::get('/', function () {
	    return View::make('pages.home');
	});

	Route::get('/jerseybola', function () {
	    return View::make('pages.jerseybola');
	});

	Route::get('/jerseyfutsal', function () {
	    return View::make('pages.jerseyfutsal');
	});

	Route::get('/sepatubola', function () {
	    return View::make('pages.sepatubola');
	});

	Route::get('/sepatufutsal', function () {
	    return View::make('pages.sepatufutsal');
	});
});

Route::group(['middleware' => 'guest'], function(){
	Route::get('/', function () {
	    return View::make('pages.home');
	})->name('home');

	Route::get('/jerseybola', function () {
	    return View::make('pages.jerseybola');
	});

	Route::get('/jerseyfutsal', function () {
	    return View::make('pages.jerseyfutsal');
	});

	Route::get('/sepatubola', function () {
	    return View::make('pages.sepatubola');
	});

	Route::get('/sepatufutsal', function () {
	    return View::make('pages.sepatufutsal');
	});
});