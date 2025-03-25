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
                <label for="mark">Jegy</label>
                <input type="text" id="mark" name="mark" required value="{{ old('mark', $mark->mark) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('marks.index') }}">Mégse</a>
        </form>
    </div>
@endsection