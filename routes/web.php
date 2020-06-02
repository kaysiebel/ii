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

Route::resource('/articles', 'ArticleController');

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

Route::get('/stock',                               'ArticleController@stock')->name('stock');
Route::get('/searchresult',                        'SearchController@index')->name('searchresult');

Route::get('/search', function () {
    return view('search');
})->name('search');

Route::get('/', function () {
    return view('start');
})->name('start');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');
