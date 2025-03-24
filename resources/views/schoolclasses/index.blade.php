@extends('layout')
 
@section('content')
<h1>Osztályok</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
 
    <ul>
        <table>
        <a href="{{ route(name: 'schoolclasses.create') }}" title="Új">Új hozzáadása</a>
        @foreach($schoolclasses as $schoolclass)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $schoolclass->id }}</div>
                <div class="col">
    <a href="{{ route('schoolclasses.students', $schoolclass->id) }}">
        {{ $schoolclass->name }}
    </a>
</div>
                <div class="right">
                    <div class="col">
{{--                        <a href="{{ route('schoolclasses.show', $schoolclass->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i></button></a></div>--}}
                       
                    </div>
 
                    
                        <div class="col">
                            <a href="{{ route('schoolclasses.edit', $schoolclass->id) }}"><button>Módosít</button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('schoolclasses.destroy', $schoolclass->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-schoolclass">Töröl</button>
                            </form>
                        </div>
                    
                </div>
 
            </li>
        @endforeach
        </table>
    </ul>
    @isset($abc)
        <div class="paginator">
            {{ $schoolclasses
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