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

Route::get('/articles',             'ArticleController@index')->name('index');
Route::get('/stock',                'ArticleController@stock')->name('stock');
Route::get('/articles/create',      'ArticleController@create')->name('create');
Route::post('/articles',            'ArticleController@store');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/entries', function () {
    return view('entries');
})->name('enries');

Route::get('/consumption', function () {
    return view('consumption');
})->name('consumption');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');
