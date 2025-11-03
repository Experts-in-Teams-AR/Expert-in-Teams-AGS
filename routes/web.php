<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\StartController;
use App\Http\Controllers\TipsController;
use App\Http\Controllers\HistoryController;

Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('session.setup')
        : redirect()->route('home');
})->name('main');

Route::view('home', 'main')->name('home');

Route::view('audience-reactor', 'about')->name('about');
Route::view('what-it-is', 'about')->name('about.what');
Route::view('why-it-matters', 'why')->name('about.why');
Route::view('how-it-works', 'how')->name('about.how');
Route::view('meet-us', 'meet')->name('about.meet');

Route::view('practice', 'practice')->name('practice');

Route::view('resources', 'blog')->name('resources');
Route::view('blog', 'blog')->name('resources.blog');
Route::view('case-studies', 'case')->name('resources.case');
Route::view('research', 'research')->name('resources.research');

Route::view('enterprise', 'enterprise')->name('enterprise');
Route::view('education', 'education')->name('enterprise.education');
Route::view('business', 'business')->name('enterprise.business');

Route::view('pricing', 'pricing')->name('pricing');

Route::view('faq', 'faq')->name('faq');

Route::get('/setup', [SetupController::class, 'index'])->middleware(['auth'])->name('session.setup');
Route::get('/setup-form', [SetupController::class, 'setupform'])->middleware(['auth'])->name('session.setupform');
Route::post('/setup-form', [SetupController::class, 'setup'])->middleware(['auth'])->name('session.setupformpost');
Route::get('/start', [StartController::class, 'index'])->middleware(['auth'])->name('session.start');
Route::get('/results', [ResultController::class, 'index'])->middleware(['auth'])->name('session.results');

Route::get('/tips', [TipsController::class, 'index'])->middleware(['auth'])->name('tips');

Route::get('/history', [HistoryController::class, 'index'])->middleware(['auth'])->name('history');

Route::get('/export', [ExportController::class, 'index'])->middleware(['auth'])->name('resources.export');

Route::view('profile', 'profile')->middleware(['auth'])->name('profile');
Route::view('dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
