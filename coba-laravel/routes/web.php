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

Route::get('/about', function () {
    return view('about', [
        "name" => "Mohamad Fidi",
        "email" => "193040129.mohammad@mail.unpas.ac.id",
        "image" => "fidi.jpeg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
