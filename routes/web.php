<?php

use App\Http\Controllers\Administraion\AcademicYearController;
use App\Http\Controllers\Administraion\ClassController;
use App\Http\Controllers\Administraion\MajorController;
use App\Http\Controllers\Administraion\StudentAdmissionController;
use App\Http\Controllers\Administraion\TeacherAdmissionController;
use App\Http\Controllers\Administraion\TeacherAdmistrationController;
use App\Http\Controllers\ProfileController;
use App\Models\TeacherAdministration;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/template', function () {
    return view('auth.template-register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/administration/classes', function () {
//     return view('administration.classes.index');
// });
// Route::get('/administration/classes/create', function () {
//     return view('administration.classes.create');
// });
// Route::get('/administration/classes/{id}/edit', function () {
//     return view('administration.classes.edit');
// });



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
Route::get('/administration/application/{id}/detail', function () {
    return view('administration.application.detail');
});

//Jurusan
Route::prefix('administration')->name('administration.')->group(function () {
    Route::prefix('major')->name('major.')->group(function () {
        Route::get('/', [MajorController::class, 'index'])->name('index');
        Route::get('/create', [MajorController::class, 'create'])->name('create');
        Route::post('/create', [MajorController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [MajorController::class, 'edit'])->name('edit');
        Route::post('/{id}/edit', [MajorController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [MajorController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('school_year')->name('school_year.')->group(function () {
        Route::get('/', [AcademicYearController::class, 'index'])->name('school_year');
        Route::get('/create', [AcademicYearController::class, 'create'])->name('school_year.create');
        Route::post('/create', [AcademicYearController::class, 'store'])->name('school_year.store');
        Route::get('/{id}/edit', [AcademicYearController::class, 'edit'])->name('school_year.edit');
        Route::post('/{id}/edit', [AcademicYearController::class, 'update'])->name('school_year.update');
        Route::delete('/{id}/destroy', [AcademicYearController::class, 'destroy'])->name('school_year.destroy');
    });
    Route::prefix('classes')->name('classes.')->group(function () {
        Route::get('/', [ClassController::class, 'index'])->name('classes');
        Route::get('/create', [ClassController::class, 'create'])->name('classes.create');
        Route::post('/create', [ClassController::class, 'store'])->name('classes.store');
        Route::get('/{id}/edit', [ClassController::class, 'edit'])->name('classes.edit');
        Route::post('/{id}/edit', [ClassController::class, 'update'])->name('classes.update');
        Route::delete('/{id}/destroy', [ClassController::class, 'destroy'])->name('classes.destroy');
    });
    Route::prefix('student-admission-requirements')->name('student-admission-requirements.')->group(function () {
        Route::get('/', [StudentAdmissionController::class, 'index'])->name('student-admission-requirements');
        Route::get('/create', [StudentAdmissionController::class, 'create'])->name('student-admission-requirements.create');
        Route::post('/create', [StudentAdmissionController::class, 'store'])->name('student-admission-requirements.store');
        Route::get('/{id}/edit', [StudentAdmissionController::class, 'edit'])->name('student-admission-requirements.edit');
        Route::post('/{id}/edit', [StudentAdmissionController::class, 'update'])->name('student-admission-requirements.update');
        Route::delete('/{id}/destroy', [StudentAdmissionController::class, 'destroy'])->name('student-admission-requirements.destroy');
    });
    Route::prefix('teacher-administration')->name('teacher-administration.')->group(function () {
        Route::get('/', [TeacherAdmistrationController::class, 'index'])->name('teacher-administration');
        Route::get('/create', [TeacherAdmistrationController::class, 'create'])->name('teacher-administration.create');
        Route::post('/create', [TeacherAdmistrationController::class, 'store'])->name('teacher-administration.store');
        Route::get('/{id}/edit', [TeacherAdmistrationController::class, 'edit'])->name('teacher-administration.edit');
        Route::post('/{id}/edit', [TeacherAdmistrationController::class, 'update'])->name('teacher-administration.update');
        Route::delete('/{id}/destroy', [TeacherAdmistrationController::class, 'destroy'])->name('teacher-administration.destroy');
    });
});



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
Route::get('/administration/teacher/{id}/detail', function () {
    return view('administration.teacher.detail');
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
// Route::get('/administration/teacher-administration', function () {
//     return view('administration.teacher_administration.index');
// });
// Route::get('/administration/teacher-administration/create', function () {
//     return view('administration.teacher_administration.create');
// });
// Route::get('/administration/teacher-administration/{id}/edit', function () {
//     return view('administration.teacher_administration.edit');
// });

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

//Jadwal Pelajaran
Route::get('/administration/subject-schedule', function () {
    return view('administration.subject_schedule.index');
});
Route::get('/administration/subject-schedule/create', function () {
    return view('administration.subject_schedule.create');
});
Route::get('/administration/subject-schedule/{id}/edit', function () {
    return view('administration.subject_schedule.edit');
});

//TU
Route::get('/administration/administration', function () {
    return view('administration.administrations.index');
});
Route::get('/administration/administration/{id}/detail', function () {
    return view('administration.administrations.detail');
});
Route::get('/administration/administration/import', function () {
    return view('administration.administrations.import');
});
Route::get('/administration/administration/{id}/edit', function () {
    return view('administration.administrations.edit');
});





//persyaratan PPDB
// Route::get('/administration/student-admission-requirements', function () {
//     return view('administration.studentAdmissionRequirements.index');
// });
// Route::get('/administration/student-admission-requirements/craete', function () {
//     return view('administration.studentAdmissionRequirements.create');
// });



// Kelola PPDB
Route::get('/administration/student-admission', function () {
    return view('administration.studentAdmission.index');
});
Route::get('/administration/student-admission/pending', function () {
    return view('administration.studentAdmission.pending');
});
Route::get('/administration/student-admission/accepted', function () {
    return view('administration.studentAdmission.accepted');
});
Route::get('/administration/student-admission/rejected', function () {
    return view('administration.studentAdmission.rejected');
});
require __DIR__.'/auth.php';
