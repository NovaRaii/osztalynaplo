<?php
 
namespace App\Http\Controllers;
 
use App\Models\Classessubject;
use App\Models\SchoolClass;
use Illuminate\Http\Request;
 
class ClassessubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classSubjects = ClassesSubject::with(['schoolclass', 'subject'])->get();

        return view('classessubjects.index', compact('classSubjects'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('classessubject.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $classessubject = new Classessubject();
        $classessubject->name = $request->input('name');
        $classessubject->save();
 
        return redirect()->route('classessubjects.index')->with('success', "{$classessubject->name} sikeresen létrehozva");
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
        $schoolclasses = SchoolClass::find($id);
        return view('classessubjects.edit', compact('classessubject'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $classessubject = Classessubject::find($id);
         $classessubject->name = $request->input('name');
         $classessubject->save();
 
         return redirect()->route('classessubjects.index')->with('success', "{$classessubject->name} sikeresen módosítva");
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classessubject = Classessubject::find($id);
        $classessubject->delete();
 
        return redirect()->route('classessubjects.index')->with('success', "Sikeresen törölve");
    }
}