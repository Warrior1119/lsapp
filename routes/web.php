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
    return view('welcome');
});

/*
Route::get('/hello', function () {
    return 'Hello World!';
});

Route::get('/users/{id}/{name}', function($id, $name) {
    return '<h1>This is user '.$name.' with an id of '.$id.'</h1>';
});
*/

Route::get('/about', function() {
    return view('pages.about');
});