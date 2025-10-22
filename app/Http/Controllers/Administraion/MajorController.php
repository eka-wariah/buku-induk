<?php

namespace App\Http\Controllers\Administraion;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;
Use RealRashid\SweetAlert\Facades\Alert;


class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::all();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('administration.majors.index', compact(['majors']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administration.majors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $CreateMajor = Major::create([
            'mjr_name' => $request->mjr_name,
            'mjr_abbr' => $request->mjr_abbr,
        ]); 
        return redirect('/administration/major');
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
    public function edit(Major $majors, $id)
    {
        $EditMajor = Major::findOrFail($id);
        return view('administration.majors.edit', compact(['EditMajor']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $majors, $id)
    {
        $UpdateMajor =Major::findOrFail($id); 
        $UpdateMajor->mjr_name = $request->mjr_name;
        $UpdateMajor->mjr_abbr = $request->mjr_abbr;
        $UpdateMajor->save();

        Alert::success('Berhasil Mengedit', 'Berhasil mengubah data jurusan');
        return redirect('/administration/major');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $majors, $id)
    {
        $DestroyMajor = Major::findOrFail($id);
        //dd ($destroyScopeCategories);
        $DestroyMajor->delete();
        return redirect('/administration/major');
    }
}
