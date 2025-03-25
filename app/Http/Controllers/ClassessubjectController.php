<?php
 
namespace App\Http\Controllers;
 
use App\Models\Classessubject;
use App\Models\SchoolClass;
use Illuminate\Http\Request;
use App\Models\Subject;
 
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
        $schoolclasses = SchoolClass::all(); // Lekérjük az összes osztályt
        $subjects = Subject::all(); // Lekérjük az összes tantárgyat

        return view('classessubjects.create', compact('schoolclasses', 'subjects'));

    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validálás
        $request->validate([
        'class_id' => 'required|exists:school_classes,id',
        'subject_id' => 'required|exists:subjects,id',
    ]);

    // Új rekord létrehozása az adatbázisban
    Classessubject::create([
        'class_id' => $request->input('class_id'),
        'subject_id' => $request->input('subject_id'),
    ]);

    return redirect()->route('classessubjects.index')->with('success', 'Osztály és tantárgy sikeresen hozzáadva!');
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
    public function edit($id)
{
    $classSubject = ClassesSubject::findOrFail($id); // Az adott osztály-tantárgy kapcsolat lekérése
    $subjects = Subject::all(); // Az összes tantárgy lehívása a dropdown menühöz

    return view('classessubjects.edit', compact('classSubject', 'subjects'));
}



    

 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'subject_id' => 'required|exists:subjects,id', // Biztosítjuk, hogy létező tantárgyat válasszanak
    ]);

    $classSubject = ClassesSubject::findOrFail($id);
    $classSubject->subject_id = $request->input('subject_id'); // Frissítjük a tantárgy ID-t
    $classSubject->save();

    return redirect()->route('classessubjects.index')->with('success', 'A tantárgy sikeresen módosítva.');
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