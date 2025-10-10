<?php

use App\Http\Controllers\Administraion\AcademicYearController;
use App\Http\Controllers\Administraion\MajorController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/administration/classes', function () {
    return view('administration.classes.index');
});
Route::get('/administration/classes/create', function () {
    return view('administration.classes.create');
});
Route::get('/administration/classes/{id}/edit', function () {
    return view('administration.classes.edit');
});

Route::get('/administration/major', [MajorController::class, 'index'])->name('major');
Route::get('/administration/major/create', [MajorController::class, 'create'])->name('major.create');
Route::get('/administration/major/{id}/edit', [MajorController::class, 'edit'])->name('major.edit');

Route::get('/administration/school_year', [AcademicYearController::class, 'index'])->name('school_year');
Route::get('/administration/school_year/create', [AcademicYearController::class, 'create'])->name('school_year.create');
Route::get('/administration/school_year/{id}/edit', [AcademicYearController::class, 'edit'])->name('school_year.edit');

Route::get('/administration/applications', function () {
    return view('administration.application.index');
});
Route::get('/administration/applications/Application-requirements', function () {
    return view('administration.application.create');
});



require __DIR__.'/auth.php';
