@extends('layout')
 
@section('content')
<h1>Osztálynapló</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
 
    <ul>
        <table>
        <a href="{{ route(name: 'classbooks.create') }}" title="Új">Új hozzáadása</a>
        @foreach($classbooks as $classbook)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $classbook->id }}</div>
                <div class="col">{{ $classbook->schoolclass->name }}</div>
                <div class="col">{{ $classbook->student->name }}</div>
                <div class="col">{{ $classbook->classessubject->name }}</div>
                <div class="col">{{ $classbook->mark->name }}</div>

                <div class="right">
                   
                        <div class="col">
                            <a href="{{ route('classbooks.edit', $classbook->id) }}"><button>Módosít</button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('classbooks.destroy', $classbook->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-classbook">Töröl</button>
                            </form>
                        </div>
                   
                </div>
 
            </li>
        @endforeach
        </table>
    </ul>
    @isset($abc)
        <div class="paginator">
            {{ $vehicles
                ->appends([
                    'sort_by' => request('sort_by'),
                    'sort_dir' => request('sort_dir'),
                ])
                ->links()
 
            }}
        </div>
    @endisset
</div>
@endsection