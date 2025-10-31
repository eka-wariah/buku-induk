<?php

namespace App\Http\Controllers\Administraion;

use App\Http\Controllers\Controller;
use App\Models\StudentAdmissionRequirement;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudentAdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student_admission = StudentAdmissionRequirement::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('administration.studentAdmissionRequirements.index', compact(['student_admission']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administration.studentAdmissionRequirements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $CreateStudentAdmission = StudentAdmissionRequirement::create([
            'sar_name' => $request->sar_name,
        ]); 
        // dd($CreateStudentAdmission);
        return redirect('/administration/student-admission-requirements');
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
        $EditAdmission = StudentAdmissionRequirement::findOrFail($id);
        return view('administration.studentAdmissionRequirements.edit', compact('EditAdmission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $UpdateAdmission =StudentAdmissionRequirement::findOrFail($id); 
        $UpdateAdmission->sar_name = $request->sar_name;
        $UpdateAdmission->save();

        Alert::success('Berhasil Mengedit', 'Berhasil mengubah data jurusan');
        return redirect('/administration/student-admission-requirements');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentAdmissionRequirement $student_admission, $id)
    {
        $DestroyAdmission = StudentAdmissionRequirement::findOrFail($id);
        //dd ($destroyScopeCategories);
        $DestroyAdmission->delete();
        return redirect('/administration/student-admission-requirements');
    }
}
