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

/* Route::get('/', function () {
    return view('layouts.app');
}); */

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('posts', 'PostController');
    });

Route::get('/contacts', 'Guest\ContactController@contact')->name('guest.contacts');
Route::post('/contacts', 'Guest\ContactController@sendEmail')->name('guest.storeContact');
Route::get('/thanks', 'Guest\ContactController@thanks')->name('guest.thanks');

//Route::middleware('guest')->get('/', 'Guest\HomeController@index');
// # tutte le altre rotte -> reindirizzale alla home dei guest
Route::get('{any?}', function () {
    return view('guest.home');
})->where('any', '.*');
