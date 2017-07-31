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

Route::get('career', function () {
    return view('career');
});

Route::get('contactme', 
    ['as' => 'contactme', 'uses' => 'contactController@create']
);

Route::post('contactme', 
  ['as' => 'contact_store', 'uses' => 'contactController@store']
);
