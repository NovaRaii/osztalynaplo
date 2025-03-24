@extends('layout')

@section('content')
<h1>Tanulók</h1>
<div>
	@include('success')
	
    <button class="add-button"><a href="{{ route('students.create') }}" title="Új">Új hozzáadása</a></button>
	@foreach($students as $student)
		<div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
			<div class="col id">{{ $student->id }}</div>
			<div class="col">{{$student->name}}</div>
            <div class="col">{{$student->gender}}</div>
            <div class="col">{{ $student->class ? $student->class->name : 'Nincs osztály' }}</div>
			<div class="right">
					<div class="col"><a href="{{ route('students.edit', $student->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i>Módosítás</button></a></div>
					<div class="col">
						<form action="{{ route('students.destroy', $student->id) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" name="btn-del-student"><i class="fa fa-trash-can trash" title="Töröl"></i>Törlés</button>
						</form>
					</div>
			</div>
		</div>
	@endforeach
</div>
@endsection