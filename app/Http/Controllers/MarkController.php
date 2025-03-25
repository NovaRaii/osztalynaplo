<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Mark;
use App\Models\Student;
use App\Models\Subject;

class MarkController extends Controller
{
    /**
     * Összes jegy listázása
     */
    public function index()
    {
        $marks = Mark::with(['student', 'subject'])->get();
        return view('marks.index', compact('marks'));
    }
 
    /**
     * Új jegy létrehozása
     */
    public function create()
    {
        $students = Student::all();
        $subjects = Subject::distinct()->get(['id', 'name']); 
        return view('marks.create', compact('students', 'subjects'));
    }
 
    /**
     * Új jegy mentése
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'subject_id' => 'required|exists:subjects,id',
            'mark' => 'required|integer|min:1|max:5',
            'date' => 'required|date',
        ]);

        $mark = new Mark();
        $mark->student_id = $request->student_id;
        $mark->subject_id = $request->subject_id;
        $mark->mark = $request->mark;
        $mark->date = $request->date;
        $mark->save();

        return redirect()->route('marks.index')->with('success', "Jegy sikeresen hozzáadva!");
    }
 
    /**
     * Jegy szerkesztése
     */
    public function edit(string $id)
    {
        $mark = Mark::findOrFail($id);
        $students = Student::all();
        $subjects = Subject::all();
        return view('marks.edit', compact('mark', 'students', 'subjects'));
    }
 
    /**
     * Jegy frissítése
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'mark' => 'required|integer|min:1|max:5',
        ]);

        $mark = Mark::findOrFail($id);
        $mark->mark = $request->mark;
        $mark->save();

        return redirect()->route('marks.index')->with('success', "Jegy sikeresen módosítva!");
    }
 
    /**
     * Jegy törlése
     */
    public function destroy(string $id)
    {
        $mark = Mark::findOrFail($id);
        $mark->delete();

        return redirect()->route('marks.index')->with('success', "Jegy sikeresen törölve!");
    }
}