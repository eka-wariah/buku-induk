<?php

namespace App\Http\Controllers\Administraion;

use App\Http\Controllers\Controller;
use App\Models\AcademicYear;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $academic_year = AcademicYear::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('administration.academic_year.index', compact('academic_year'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administration.academic_year.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $CreateAcademic = AcademicYear::create([
            'acy_starting_year' => $request->acy_starting_year,
            'acy_year_over' => $request->acy_year_over,
        ]); 
        return redirect('/administration/school_year');
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
        $EditAcademic = AcademicYear::findOrFail($id);
        return view('administration.academic_year.edit', compact('EditAcademic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $UpdateAcademic =AcademicYear::findOrFail($id); 
        $UpdateAcademic->acy_starting_year = $request->acy_starting_year;
        $UpdateAcademic->acy_year_over = $request->acy_year_over;
        $UpdateAcademic->save();

        Alert::success('Berhasil Mengedit', 'Berhasil mengubah data jurusan');
        return redirect('/administration/school_year');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AcademicYear $academic_year, $id)
    {
        $DestroyAcademic = AcademicYear::findOrFail($id);
        //dd ($destroyScopeCategories);
        $DestroyAcademic->delete();
        return redirect('/administration/school_year');
    }
}
