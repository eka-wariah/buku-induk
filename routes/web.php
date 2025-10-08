<?php

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
require __DIR__.'/auth.php';
