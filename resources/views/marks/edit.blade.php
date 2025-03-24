@extends('layout')
<div>
</div>
@section('content')
    <div>
        @include('error')
        <form action="{{ route('marks.update', $mark->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Megnevezés</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $mark->name) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('marks.index') }}">Mégse</a>
        </form>
    </div>
@endsection