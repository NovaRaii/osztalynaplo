@extends('layout')
<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div>
@section('content')
    <div>
        <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
<<<<<<< HEAD
        @include('error')
        <form action="{{ route('students.update', $student->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Név</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $student->name) }}">
                <label for="gender">Nem</label>
                <input type="text" id="gender" name="gender" required value="{{ old('gender', $student->gender) }}">
            </fieldset>
            <fieldset>
                <label for="class_id">Osztály</label>
                <select name="class_id" id="select-class" title="Osztályok">
                    <option value="0">-- Válassz osztályt --</option>
                    @foreach($schoolclasses as $schoolclass)
                        <option value="{{ $schoolclass->id }}">{{ $schoolclass->name }}</option>
                    @endforeach
                </select>
	        </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('students.index') }}">Mégse</a>
        </form>
    </div>
@endsection