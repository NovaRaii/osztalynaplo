<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/subjects', [SubjectController::class, 'store'])->name('subjects.store');
Route::get('/subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
Route::patch('/subjects/{subject}', [SubjectController::class, 'update'])->name('subjects.update');
Route::get('/subjects/{subject}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
Route::delete('/subjects/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');
Route::get('/subjects', [SubjectController::class, 'index'])->name('subjects.index');
Route::get('/subjects/{subject}', [SubjectController::class, 'show'])->name('subjects.show');
