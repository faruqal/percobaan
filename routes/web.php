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

Route::get('/home', function () {
    return view('BLOG/home');
});

Route::get('/home/satu', function () {
    return view('home');
});

Route::get('/home/satu', function () {
    dd($_GET['satu']);
    return view('welcome');
});

Route::get('/home/parameter/{satu}', function ($satu) {
    dd($satu);
    return view('welcome');
});