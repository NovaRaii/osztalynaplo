@extends('layout')
 
@section('content')
<h1>Jegyek</h1>
<div>
    @include('success')
    <button class="add-button">
        <a href="{{ route('marks.create') }}" title="Új">Új hozzáadása</a>
    </button>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Diák</th>
                <th>Tantárgy</th>
                <th>Jegy</th>
                <th>Dátum</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach($marks as $mark)
                <tr class="{{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                    <td>{{ $mark->id }}</td>
                    <td>{{ $mark->student ? $mark->student->name : 'Ismeretlen diák' }}</td>
                    <td>{{ $mark->subject ? $mark->subject->name : 'Ismeretlen tantárgy' }}</td>
                    <td>{{ $mark->mark }}</td>
                    <td>{{ $mark->date }}</td>
                    <td class="right">
                        <a href="{{ route('marks.edit', $mark->id) }}"><button>Módosítás</button></a>
                        <form action="{{ route('marks.destroy', $mark->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="btn-del-mark">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
