<?php
 
namespace App\Http\Controllers;
use App\Models\SchoolClass;
use Illuminate\Http\Request;
 
class SchoolClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schoolclasses = SchoolClass::all();
        return view('schoolclasses.index', compact('schoolclasses'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schoolclasses.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schoolclass = new SchoolClass();
        $schoolclass->name = $request->input('name');
        $schoolclass->save();
 
        return redirect()->route('fuels.index')->with('success', "{$schoolclass->name} sikeresen létrehozva");
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $schoolclass = SchoolClass::find($id);
        return view('schoolclasses.edit', compact('schoolclass'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $schoolclass = SchoolClass::find($id);
        $schoolclass->name = $request->input('name');
        $schoolclass->save();
 
        return redirect()->route('schoolclasses.index')->with('success', "{$schoolclass->name} sikeresen módosítva");
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $schoolclass = SchoolClass::find($id);
        $schoolclass->delete();
 
        return redirect()->route('schoolclasses.index')->with('success', "Sikeresen törölve");
    }
}