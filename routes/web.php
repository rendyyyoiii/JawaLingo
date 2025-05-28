<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ScoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/chapters', [ChapterController::class, 'index'])->name('chapters.index');
Route::get('/chapters/{level_id}', [ChapterController::class, 'index'])->name('chapters.index');

Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');

Route::get('/scores', [ScoreController::class, 'index'])->name('scores.index');


Route::post('/quiz/{chapter_id}/submit', [QuizController::class, 'submitAnswer'])->name('quiz.submit');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
