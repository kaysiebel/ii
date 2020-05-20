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

Route::get('/chart',                              'ArticleController@chart')->name('chart');

Route::get('/articles',                              'ArticleController@index')->name('index');
Route::get('/stock',                                 'ArticleController@stock')->name('stock');
Route::get('/articles/create',                       'ArticleController@create')->name('create');
Route::post('/articles',                             'ArticleController@store');
Route::get('/articles/{article}',                    'ArticleController@show')->name('show');

Route::get('/articles/{article}/entries',            'ArticleController@entries')->name('entries');
Route::get('/articles/{article}/consumptions',       'ArticleController@consumptions')->name('consumptions');

Route::get('/articles/{article}/edit',               'ArticleController@edit');
Route::patch('/articles/{article}',                  'ArticleController@update');
Route::delete('/articles/{article}',                 'ArticleController@destroy');


Route::post('/entries',                            'EntryController@store');
Route::get('/entries/{entry}/edit',                'EntryController@edit');
Route::patch('/entries/{entry}',                   'EntryController@update');
Route::delete('/entries/{entry}',                  'EntryController@destroy');

Route::post('/consumptions',                       'ConsumptionController@store');
Route::get('/consumptions/{consumption}/edit',     'ConsumptionController@edit');
Route::patch('/consumptions/{consumption}',        'ConsumptionController@update');
Route::delete('/consumptions/{consumption}',       'ConsumptionController@destroy');


Route::get('/', function () {
    return view('start');
})->name('start');

Route::get('/statistic', function () {
    return view('statistic');
})->name('statistic');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/landing', function () {
    return view('landing');
})->name('landing');
