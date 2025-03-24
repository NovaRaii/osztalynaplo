@extends('layout')

	<main>
        	@yield('content')
    	</main>

	
@section('content')
<h1>Új Osztály</h1>
<div>


<form action="{{ route('schoolclasses.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <label for="year">Évfolyam</label>
            <input type="text" id="year" name="year">
            <label for="name">Osztály</label>
            <input type="text" id="name" name="name">
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('schoolclasses.index') }}">Mégse</a>
    </form>
</div>
@endsection