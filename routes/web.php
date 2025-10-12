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



// Persyaratan Lamaran
Route::get('/administration/application-requirements', function () {
    return view('administration.applicationRequirements.index');
});
Route::get('/administration/application-requirements/create', function () {
    return view('administration.applicationRequirements.create');
});


//lamaran
Route::get('/administration/application', function () {
    return view('administration.application.index');
});
Route::get('/administration/application-accepted', function () {
    return view('administration.application.accepted');
});
Route::get('/administration/application-rejected', function () {
    return view('administration.application.rejected');
});

//Jurusan
Route::get('/administration/major', [MajorController::class, 'index'])->name('major');
Route::get('/administration/major/create', [MajorController::class, 'create'])->name('major.create');
Route::get('/administration/major/{id}/edit', [MajorController::class, 'edit'])->name('major.edit');

Route::get('/administration/school_year', [AcademicYearController::class, 'index'])->name('school_year');
Route::get('/administration/school_year/create', [AcademicYearController::class, 'create'])->name('school_year.create');
Route::get('/administration/school_year/{id}/edit', [AcademicYearController::class, 'edit'])->name('school_year.edit');

//Pelamar
Route::get('/administration/applications', function () {
    return view('administration.applicant.index');
});
Route::get('/administration/applications/Application-requirements', function () {
    return view('administration.applicant.requirement');
});
Route::get('/administration/applications/pending', function () {
    return view('administration.application.pending');
});

//Guru
Route::get('/administration/teacher', function () {
    return view('administration.teacher.index');
});
Route::get('/administration/teacher2', function () {
    return view('administration.teacher.index2');
});
Route::get('/administration/teacher/import', function () {
    return view('administration.teacher.import');
});
Route::get('/administration/teacher/{id}/edit', function () {
    return view('administration.teacher.edit');
});
Route::get('/administration/teacher/{id}/employment status/edit', function () {
    return view('administration.teacher.edit_employe');
});

//Administrasi Guru
Route::get('/administration/teacher-administration', function () {
    return view('administration.teacher_administration.index');
});
Route::get('/administration/teacher-administration/create', function () {
    return view('administration.teacher_administration.create');
});
Route::get('/administration/teacher-administration/{id}/edit', function () {
    return view('administration.teacher_administration.edit');
});

//Modul
Route::get('/administration/module', function () {
    return view('administration.modul.index');
});
Route::get('/administration/module/create', function () {
    return view('administration.modul.create');
});
Route::get('/administration/module/{id}/edit', function () {
    return view('administration.modul.edit');
});

Route::get('/teacher/question/create', function () {
    return view('teacher.task.question');
});

Route::get('/student/student-admission', function () {
    return view('student.admission.index');
});

//Tugas Siswa
Route::get('/student/task', function () {
    return view('student.task.index');
});
Route::get('/student/task/{id}/assignment', function () {
    return view('teacher.task.assignment');
});
Route::get('/student/task/{id}/detail', function () {
    return view('student.task.detail');
});


require __DIR__.'/auth.php';
