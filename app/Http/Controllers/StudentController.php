<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\SchoolClass;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $class_id = null)
{
    if ($class_id) {
        $schoolClass = SchoolClass::findOrFail($class_id);
        $students = Student::where('class_id', $class_id)->get();
    } else {
        $students = Student::all();
        $schoolClass = null;
    }

    return view('students.index', compact('students', 'schoolClass'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student  = new Student();
        $student->name = $request->input('name'); 
        $student->save();
 
        return redirect()->route('students.index')->with('success', "{$student->name} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student  = Student::find($id);
        $student->name = $request->input('name');
        $student->save();
 
        return redirect()->route('students.index')->with('success', "{$student->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student  = Student::find($id);
        $student->delete();
 
        return redirect()->route('students.index')->with('success', "Sikeresen törölve");
    }
}
