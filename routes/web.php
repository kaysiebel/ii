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

Route::get('/chart',                                'ArticleController@chart')->name('chart');

// Route::resource('/articles', 'ArticleController');
Route::get('/articles',                              'ArticleController@index')->name('index');
Route::get('/stock',                                 'ArticleController@stock')->name('stock');
Route::get('/articles/create',                       'ArticleController@create')->name('create');
Route::post('/articles',                             'ArticleController@store');
Route::get('/articles/{article}',                    'ArticleController@show')->name('show');

Route::get('/articles/{article}/edit',               'ArticleController@edit')->name('edit');
Route::patch('/articles/{article}',                  'ArticleController@update')->name('update');
Route::delete('/articles/{article}',                 'ArticleController@destroy')->name('destroy');

Route::get('/articles/{article}/entries',            'ArticleController@entries')->name('entries');
Route::get('/articles/{article}/consumptions',       'ArticleController@consumptions')->name('consumptions');


Route::post('/entries',                            'EntryController@store')->name('entry.store');
Route::get('/entries/{entry}/edit',                'EntryController@edit')->name('entry.edit');
Route::patch('/entries/{entry}',                   'EntryController@update')->name('entry.update');
Route::delete('/entries/{entry}',                  'EntryController@destroy')->name('entry.destroy');

Route::post('/consumptions',                       'ConsumptionController@store')->name('consumption.store');
Route::get('/consumptions/{consumption}/edit',     'ConsumptionController@edit')->name('consumption.edit');
Route::patch('/consumptions/{consumption}',        'ConsumptionController@update')->name('consumption.update');
Route::delete('/consumptions/{consumption}',       'ConsumptionController@destroy')->name('consumption.destroy');


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
