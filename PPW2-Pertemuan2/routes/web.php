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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Risma",
        "email" => "risma@gmail.com"
    ]);
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/exampleabout', function () {
    return view('exampleabout');
});
