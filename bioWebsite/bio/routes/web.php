<?php

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
    return view('index');
});

Route::get('aboutme', function () {
    return view('aboutme');
});

Route::get('projects', function () {
    return view('projects');
});

Route::get('contactme', function () {
    return view('contactme');
});

