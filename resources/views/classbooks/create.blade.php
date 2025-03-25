@extends('layout')
 
    <main>
            @yield('content')
        </main>
 
   
@section('content')
<h1>Új Jegy</h1>
<div>
 
 
<form action="{{ route('classbooks.store') }}" method="post" enctype="multipart/form-data">
        @csrf
         
    <fieldset>
        <label for="schoolclass_id">Osztály</label>
        <select name="schoolclass_id" id="select-schoolclass" title="Osztályok">
            <option value="0">-- Válassz osztályt --</option>
            @foreach($schoolclasses as $schoolclass)
                <option value="{{ $schoolclass->id }}">{{ $schoolclass->name }}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <label for="student_id">Tanuló</label>
        <select name="student_id" id="select-student"  title="Tanulók">
            <option value="0">-- Válassz tanulót --</option>
            @foreach($students as $student)
                <option value="{{ $student->id }}">{{ $student->name }}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <label for="classessubject_id">Tantárgy</label>
        <select name="classessubject_id" id="select-classessubject"  title="Tantárgyak">
            <option value="0">-- Válassz tantárgyat --</option>
            @foreach($classessubjects as $classessubject)
                <option value="{{ $classessubject->id }}">{{ $classessubject->id }}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <label for="mark_id">Érdemjegy</label>
        <select name="mark_id" id="select-mark"  title="Érdemjegyek">
            <option value="0">-- Válassz érdemjegyet --</option>
            @foreach($marks as $mark)
                <option value="{{ $mark->id }}">{{ $mark->name }}</option>
            @endforeach
        </select>
    </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('classbooks.index') }}">Mégse</a>
    </form>
</div>
@endsection