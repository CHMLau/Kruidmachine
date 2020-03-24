@extends('mix.layout')
@section('content')
		<form id="form" action="/mix/nieuw" method="POST">
			{{ csrf_field() }}
			<label for="naam">Naam: </label>
			<input type="text" name="naam" value="">
			<select name="kruid1">
			@foreach($kruid as $kruiden)
			
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>
			
			@endforeach
			</select>
			
			<select name="kruid2">
			@foreach($kruid as $kruiden)
			
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>
			
			@endforeach
			</select>
			
			<select name="kruid3">
			@foreach($kruid as $kruiden)
			
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>
			
			@endforeach
			</select>
			<label for="omschrijving">Omschrijving: </label>
			<input type="text" name="omschrijving" value="">
			
			<label for="hoeveelheid1">Hoeveelheid 1: </label>
			<input type="number" name="hoeveelheid1" value="">
			
			<label for="hoeveelheid2">Hoeveelheid 2: </label>
			<input type="number" name="hoeveelheid2" value="">
			
			<label for="hoeveelheid3">Hoeveelheid 3: </label>
			<input type="number" name="hoeveelheid3" value="">
			<button id="button" type="submit" name="button">Post</button>
		</form>
@endsection
