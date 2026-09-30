<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// user panel routes start here

Route::get('/index', function () {
    return view('user.index');
});

Route::get('/ostlist', function () {
    return view('user.showallost');
});
Route::get('/about', function () {
    return view('user.about');
});

Route::get('/contact', function () {
    return view('user.contact');
});
Route::get('/blogs', function () {
    return view('user.blog');
});
Route::get('/contact', function () {
    return view('user.contact');
});
Route::get('/albumlist', function () {
    return view('user.albumlist');
});


// user panel routes end here