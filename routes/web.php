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

Route::get('/', function () {
    return view('home');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/entries', function () {
    return view('entries');
});

Route::get('/consumption', function () {
    return view('consumption');
});

// Route::get('/back', function () {
//     return Redirect::back();
// });
