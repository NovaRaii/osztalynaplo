<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Mark;
 
class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marks = Mark::all();
        return view('marks.index', compact('marks'));
    }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marks.create');
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mark = new Mark();
        $mark->name = $request->input('name');
        $mark->save();
 
        return redirect()->route('marks.index')->with('success', "{$mark->name} sikeresen létrehozva");
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
        $mark = Mark::find($id);
        return view('marks.edit', compact('mark'));
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mark = Mark::find($id);
        $mark->name = $request->input('name');
        $mark->save();
 
        return redirect()->route('fuels.index')->with('success', "{$mark->name} sikeresen módosítva");
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mark = Mark::find($id);
        $mark->delete();
 
        return redirect()->route('marks.index')->with('success', "Sikeresen törölve");
    }
}