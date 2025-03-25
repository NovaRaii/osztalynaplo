@extends('layout')

@section('content')
    <div>
        @include('error')

        <form action="{{ route('classessubjects.update', $classSubject->id) }}" method="post">
            @csrf
            @method('PATCH')

            <fieldset>
                <label for="subject_id">Tantárgy kiválasztása</label>
                <select id="subject_id" name="subject_id" required>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}" {{ $classSubject->subject_id == $subject->id ? 'selected' : '' }}>
                            {{ $subject->name }}
                        </option>
                    @endforeach
                </select>
            </fieldset>

            <button type="submit">Ment</button>
            <a href="{{ route('classessubjects.index') }}">Mégse</a>
        </form>
    </div>
@endsection
