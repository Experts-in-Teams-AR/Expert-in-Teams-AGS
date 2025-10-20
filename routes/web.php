<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::view('/', 'welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'homeView'])->name('home');
Route::get('/library', [App\Http\Controllers\LibraryController::class, 'libraryView'])->name('library');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'searchView'])->name('search');
Route::get('/search/results', [SearchController::class, 'results'])->name('search.results');
Route::get('/admin', [AdminController::class, 'adminView'])->name('admin')->middleware('auth');
Route::get('/create', [AdminController::class, 'createView'])->name('create')->middleware('auth');
Route::post('/createSong', [AdminController::class, 'createSong'])->name('createSong')->middleware('auth');
Route::get('/update', [AdminController::class, 'updateView'])->name('update')->middleware('auth');
Route::get('/update/{id}', [AdminController::class, 'updateView'])->name('edit.song');
Route::put('/update/{id}', [AdminController::class, 'updateSong'])->name('update.song');
Route::get('/delete', [AdminController::class, 'deleteView'])->name('delete')->middleware('auth');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
