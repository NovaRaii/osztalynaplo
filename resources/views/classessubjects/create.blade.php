@extends('layout')

@section('content')
    <h1>Új osztály-tantárgy hozzárendelése</h1>

    <form action="{{ route('classessubjects.store') }}" method="POST">
        @csrf

        <fieldset>
            <label for="class_id">Osztály</label>
            <select id="class_id" name="class_id" required>
                <option value="">Válassz osztályt</option>
                @foreach($schoolclasses as $schoolclass)
                    <option value="{{ $schoolclass->id }}">{{ $schoolclass->name }}</option>
                @endforeach
            </select>
        </fieldset>

        <fieldset>
            <label for="subject_id">Tantárgy</label>
            <select id="subject_id" name="subject_id" required>
                <option value="">Válassz tantárgyat</option>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </fieldset>

        <button type="submit">Hozzáadás</button>
        <a href="{{ route('classessubjects.index') }}">Mégse</a>
    </form>
@endsection
