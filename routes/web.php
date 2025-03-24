<?php
 
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassessubjectController;
use App\Http\Controllers\SchoolClassController;
 
 
 
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
 
 
Route::post('/student', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::patch('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/students/{class_id?}', [StudentController::class, 'index'])->name('students.index');
 
Route::post('/mark', [MarkController::class, 'store'])->name('marks.store');
Route::get('/marks/create', [MarkController::class, 'create'])->name('marks.create');
Route::patch('/marks/{mark}', [MarkController::class, 'update'])->name('marks.update');
Route::get('/marks/{mark}/edit', [MarkController::class, 'edit'])->name('marks.edit');
Route::delete('/marks/{mark}', [MarkController::class, 'destroy'])->name('marks.destroy');
Route::get('/marks', [MarkController::class, 'index'])->name('marks.index');
 
Route::post('/classessubjects', [ClassessubjectController::class, 'store'])->name('classessubjects.store');
Route::get('/classessubjects/create', [ClassessubjectController::class, 'create'])->name('classessubjects.create');
Route::patch('/classessubjects/{classes_subject}', [ClassessubjectController::class, 'update'])->name('classessubjects.update');
Route::get('/classessubjects/{classes_subject}/edit', [ClassessubjectController::class, 'edit'])->name('classessubjects.edit');
Route::delete('/classessubjects/{classes_subject}', [ClassessubjectController::class, 'destroy'])->name('classessubjects.destroy');
Route::get('/classessubjects', [ClassessubjectController::class, 'index'])->name('classessubjects.index');
 
Route::post('/schoolclass', [SchoolClassController::class, 'store'])->name('schoolclasses.store');
Route::get('/schoolclasses/create', [SchoolClassController::class, 'create'])->name('schoolclasses.create');
Route::patch('/schoolclasses/{schoolclass}', [SchoolClassController::class, 'update'])->name('schoolclasses.update');
Route::get('/schoolclasses/{schoolclass}/edit', [SchoolClassController::class, 'edit'])->name('schoolclasses.edit');
Route::delete('/schoolclasses/{schoolclass}', [SchoolClassController::class, 'destroy'])->name('schoolclasses.destroy');
Route::get('/schoolclasses', [SchoolClassController::class, 'index'])->name('schoolclasses.index');
Route::get('/schoolclasses/{id}/students', [StudentController::class, 'index'])->name('schoolclasses.students');