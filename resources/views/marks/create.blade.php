@extends('layout')

@section('content')
<h1>Új Érdemjegy</h1>
<div>
    <form action="{{ route('marks.store') }}" method="post">
        @csrf

        <!-- Diák kiválasztása -->
        <fieldset>
            <label for="student_id">Diák</label>
            <select id="student_id" name="student_id" required>
                <option value="">-- Válassz diákot --</option>
                @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </fieldset>

        <!-- Tantárgy kiválasztása -->
        <fieldset>
            <label for="subject_id">Tantárgy</label>
            <select id="subject_id" name="subject_id" required>
                <option value="">-- Válassz tantárgyat --</option>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
            </select>
        </fieldset>

        <!-- Jegy kiválasztása -->
        <fieldset>
            <label for="mark">Jegy</label>
            <select id="mark" name="mark" required>
                <option value="">-- Válassz jegyet --</option>
                @for($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
        </fieldset>

        <!-- Dátum megadása -->
        <fieldset>
            <label for="date">Dátum</label>
            <input type="date" id="date" name="date" required>
        </fieldset>

        <button type="submit">Mentés</button>
        <a href="{{ route('marks.index') }}">Mégse</a>
    </form>
</div>
@endsection
