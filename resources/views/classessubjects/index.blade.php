@extends('layout')
 
@section('content')
<h1>Tanulók</h1>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
 
    <ul>
        <table>
        <a href="{{ route(name: 'subjects.create') }}" title="Új">Új hozzáadása</a>
        @foreach($subjects as $subject)
            <li class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
                <div class="col id">{{ $subject->id }}</div>
                <div class="col">{{$subject->name}}</div>
                <div class="right">
                    <div class="col">
{{--                        <a href="{{ route('subjects.show', $subject->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i></button></a></div>--}}
                       
                    </div>
 
                    
                        <div class="col">
                            <a href="{{ route('subjects.edit', $subject->id) }}"><button>Módosít</button></a>
                        </div>
                        <div class="col">
                            <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="btn-del-subject">Töröl</button>
                            </form>
                        </div>
                    
                </div>
 
            </li>
        @endforeach
        </table>
    </ul>
    @isset($abc)
        <div class="paginator">
            {{ $subjects
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