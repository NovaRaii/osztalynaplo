<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classbook;
use App\Models\Classessubject;
use App\Models\Mark;
use App\Models\SchoolClass;
use App\Models\Student;

class ClassbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classbooks = Classbook::all();
        return view('classbooks.index', compact('classbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schoolclasses = SchoolClass::all();
        $classessubjects = [];
        $students = [];
        $marks = [];
        return view('classbooks.create', compact('schoolclasses','classessubjects','students','marks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $classbook  = new Classbook();
        $classbook->schoolclass_id = $request->input('schoolclass_id');
        $classbook->classessubject_id = $request->input('classessubject_id');
        $classbook->student_id = $request->input('student_id');
        $classbook->mark_id = $request->input('mark_id');
        $classbook->save();

        return redirect()->route('classbooks.index')->with('success', "Sikeresen létrehozva");
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
        $classbook  = Classbook::find($id);
        $schoolClasses = SchoolClass::all();
        $classesSubject = [];
        $student = [];
        $mark = [];
        return view('classbooks.edit', compact('schoolclasses','classessubjects','students','marks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $classbook  = Classbook::find($id);
        $classbook->schoolclass_id = $request->input('schoolclass_id');
        $classbook->classessubject_id = $request->input('classessubject_id');
        $classbook->student_id = $request->input('student_id');
        $classbook->mark_id = $request->input('mark_id');
        $classbook->save();
 
        return redirect()->route('classbooks.index')->with('success', "Sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classbook = Classbook::find($id);
        $classbook->delete();
 
        return redirect()->route('classbooks.index')->with('success', "Sikeresen törölve");
    }
}
