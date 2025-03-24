<?php

namespace App\Http\Controllers;

use App\Models\Classessubject;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
