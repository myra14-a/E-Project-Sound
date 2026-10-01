<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WebsiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaBrowseController;

Route::get('/', function () {
    if (auth()->check()) {
        return auth()->user()->is_admin
            ? redirect()->route('admin.dashboard')
            : redirect()->route('home');
    }

    return view('auth.landing');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// User pages are available after signup/login.
Route::middleware(['auth'])->group(function () {
    Route::get('/index', [HomeController::class, 'index'])->name('home');
    Route::get('/media', [MediaBrowseController::class, 'index'])->name('media.index');
    Route::get('/media/{media}', [MediaBrowseController::class, 'show'])->name('media.show');

    Route::get('/ostlist', function () { return view('user.showallost'); });
    Route::get('/about', function () { return view('user.about'); });
    Route::get('/contact', function () { return view('user.contact'); });
    Route::get('/blogs', function () { return view('user.blog'); });
    Route::get('/albumlist', function () { return view('user.albumlist'); });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::post('/media/{media}/review', [MediaBrowseController::class, 'review'])->name('media.review');
    Route::post('/media/{media}/rating', [MediaBrowseController::class, 'rate'])->name('media.rate');
});

// Administrator panel
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', DashboardController::class)->name('dashboard');

        Route::get('/music', [MediaController::class, 'index'])->defaults('type', 'music')->name('music.index');
        Route::get('/music/create', [MediaController::class, 'create'])->defaults('type', 'music')->name('music.create');
        Route::post('/music', [MediaController::class, 'store'])->defaults('type', 'music')->name('music.store');
        Route::get('/music/{media}/edit', [MediaController::class, 'edit'])->defaults('type', 'music')->name('music.edit');
        Route::put('/music/{media}', [MediaController::class, 'update'])->defaults('type', 'music')->name('music.update');
        Route::delete('/music/{media}', [MediaController::class, 'destroy'])->defaults('type', 'music')->name('music.destroy');

        Route::get('/videos', [MediaController::class, 'index'])->defaults('type', 'video')->name('videos.index');
        Route::get('/videos/create', [MediaController::class, 'create'])->defaults('type', 'video')->name('videos.create');
        Route::post('/videos', [MediaController::class, 'store'])->defaults('type', 'video')->name('videos.store');
        Route::get('/videos/{media}/edit', [MediaController::class, 'edit'])->defaults('type', 'video')->name('videos.edit');
        Route::put('/videos/{media}', [MediaController::class, 'update'])->defaults('type', 'video')->name('videos.update');
        Route::delete('/videos/{media}', [MediaController::class, 'destroy'])->defaults('type', 'video')->name('videos.destroy');

        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

        Route::get('/website', [WebsiteController::class, 'edit'])->name('website.edit');
        Route::put('/website', [WebsiteController::class, 'update'])->name('website.update');
    });
