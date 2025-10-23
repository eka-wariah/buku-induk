<?php

namespace App\Http\Controllers\Administraion;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\Major;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $class = Classes::with('major')->get();
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('administration.classes.index', compact(['class']));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $majors = Major::all();
        return view('administration.classes.create', compact('majors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $CreateClass = Classes::create([
            'cls_level' => $request->cls_level,
            'cls_major_id' => $request->cls_major_id,
            'cls_number' => $request->cls_number,
        ]); 
        return redirect('/administration/classes');
       
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
        $EditClass = Classes::findOrFail($id);
        $majors = Major::all();
        return view('administration.classes.edit', compact(['EditClass', 'majors']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classes $class, string $id)
    {
        $UpdateClass =Classes::findOrFail($id); 
        $UpdateClass->cls_level = $request->cls_level;
        $UpdateClass->cls_major_id = $request->cls_major_id;
        $UpdateClass->cls_number = $request->cls_number;
        $UpdateClass->save();

        Alert::success('Berhasil Mengedit', 'Berhasil mengubah data jurusan');
        return redirect('/administration/classes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $class, $id)
    {
        $DestroyClass = Classes::findOrFail($id);
        //dd ($destroyScopeCategories);
        $DestroyClass->delete();
        return redirect('/administration/classes');
    }
}
