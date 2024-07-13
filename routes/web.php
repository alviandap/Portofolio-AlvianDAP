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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/About', function () {
    return view('about',[
        "title" => "About"
    ]);
});

Route::get('/Project', function () {
    return view('project',[
        "title" => "Project"
    ]);
});

Route::get('/Experience', function () {
    return view('experience',[
        "title" => "Experience"
    ]);
});

Route::get('/Contact', function () {
    return view('contact',[
        "title" => "Contact"
    ]);
});