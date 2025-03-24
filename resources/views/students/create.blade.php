@extends('layout')

	<main>
        	@yield('content')
    </main>

@section('content')
<h1>Új Tanuló</h1>
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
	<!-- ide íratjuk ki a validációs hibákat -->
    @include('error')
    <form action="{{route('students.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Név</label>
            <input type="text" id="name" name="name">
            <label for="gender">Nem</label>
            <input type="text" id="gender" name="gender">
        </fieldset>
        <fieldset>
		<label for="class_id">Osztály</label>
		<select name="class_id" id="select-class" title="Osztályk">
			<option value="0">-- Válassz osztályt --</option>
			@foreach($schoolclasses as $schoolclass)
				<option value="{{ $schoolclass->id }}">{{ $schoolclass->name }}</option>
			@endforeach
		</select>
	</fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('students.index') }}">Mégse</a>
    </form>
</div>
@endsection