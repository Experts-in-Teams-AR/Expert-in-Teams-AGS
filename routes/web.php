<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'main');

Route::view('audience-reactor', 'about')->name('about');
Route::view('what-it-is', 'about')->name('what');
Route::view('why-it-matters', 'why')->name('why');
Route::view('how-it-works', 'how')->name('how');
Route::view('meet-us', 'meet')->name('meet');

Route::view('practice', 'practice')->name('practice');

Route::view('resources', 'blog')->name('resources');
Route::view('blog', 'blog')->name('blog');
Route::view('case-studies', 'case')->name('case');
Route::view('research', 'research')->name('research');

Route::view('enterprise', 'enterprise')->name('enterprise');
Route::view('education', 'education')->name('education');
Route::view('business', 'business')->name('business');

Route::view('pricing', 'pricing')->name('pricing');

Route::view('faq', 'faq')->name('faq');

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');
Route::view('dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
