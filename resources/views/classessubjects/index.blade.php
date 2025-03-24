@extends('layout')
 
@section('content')
<h1>Osztály - Tantárgyak</h1>
<div>
    <ul>
        <table>
            <a href="{{ route('classessubjects.create') }}" title="Új">Új hozzáadása</a>
            @foreach($classSubjects as $cs)
                <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                    <div class="col id">{{ $cs->id }}</div>
                    <div class="col">
                        Osztály: {{ $cs->schoolclass->name }} ({{ $cs->schoolclass->year }})
                    </div>
                    <div class="col">
                        Tantárgy: {{ $cs->subject->name }}
                    </div>
                    <div class="right">
                        <div class="col">
                            <a href="{{ route('classessubjects.edit', $cs->id) }}">
                                <button>Módosít</button>
                            </a>
                        </div>
                        <div class="col">
                            <form action="{{ route('classessubjects.destroy', $cs->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-classessubject">Töröl</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </table>
    </ul>
    @isset($abc)
        <div class="paginator">
            {{ $classSubjects
                ->appends([
                    'sort_by' => request('sort_by'),
                    'sort_dir' => request('sort_dir'),
                ])
                ->links() }}
        </div>
    @endisset
</div>
@endsection
