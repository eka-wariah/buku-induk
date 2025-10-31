<?php

namespace App\Http\Controllers\Administraion;

use App\Http\Controllers\Controller;
use App\Models\TeacherAdministration;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherAdmistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher_administration = TeacherAdministration::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('administration.teacher_administration.index', compact('teacher_administration'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administration.teacher_administration.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Ambil file
    $file = $request->file('tad_file');

    // Ambil nama asli file
    $originalName = $file->getClientOriginalName();

    // Ganti spasi jadi underscore dan tambahkan timestamp biar unik
    $safeName = time() . '_' . str_replace(' ', '_', $originalName);

    // Simpan file dengan nama tersebut ke folder 'administrations'
    $filePath = $file->storeAs('administrations', $safeName, 'public');

    // Simpan ke database
    $CreateTeachAdm = TeacherAdministration::create([
        'tad_name' => $request->tad_name,
        'tad_file' => $filePath,
    ]);
        // dd($CreateTeachAdm);
        Alert::success('Berhasil Menambah', 'Berhasil menambah data administrasi guru');

        return redirect('/administration/teacher-administration');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $EditTeacherAdm = TeacherAdministration::findOrFail($id);
        return view('administration.teacher_administration.edit', compact('EditTeacherAdm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $UpdateTeacherAdm = TeacherAdministration::findOrFail($id);

    $request->validate([
        'tad_name' => 'required|string|max:255',
        'tad_file' => 'nullable|file|mimes:xlsx,csv|max:2048',
    ]);

    $UpdateTeacherAdm->tad_name = $request->tad_name;

    // Kalau user upload file baru
    if ($request->hasFile('tad_file')) {
        // Hapus file lama kalau ada
        if ($UpdateTeacherAdm->tad_file && file_exists(storage_path('app/public/'.$UpdateTeacherAdm->tad_file))) {
            unlink(storage_path('app/public/'.$UpdateTeacherAdm->tad_file));
        }

        $file = $request->file('tad_file');
        $originalName = $file->getClientOriginalName();
        $safeName = time() . '_' . str_replace(' ', '_', $originalName);

        $filePath = $file->storeAs('administrations', $safeName, 'public');
        $UpdateTeacherAdm->tad_file = $filePath;
    }

    $UpdateTeacherAdm->save();

    Alert::success('Berhasil Mengedit', 'Berhasil mengubah data administrasi guru');
    return redirect('/administration/teacher-administration');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $DestroyTeacherAdm = TeacherAdministration::findOrFail($id);
        //dd ($destroyScopeCategories);
        $DestroyTeacherAdm->delete();

        Alert::success('Berhasil Menghapus', 'Berhasil menghapus data administrasi guru');
        return redirect('/administration/teacher-administration');
    }
}
