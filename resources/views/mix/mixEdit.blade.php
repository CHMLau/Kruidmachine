@extends('mix.layout')
@section('content')
		<form id="form" action="/mix/edit/{{$mix->naam}}" method="POST">
			{{ csrf_field() }}
            {{ method_field('PATCH') }}
			<label for="naam">Naam: </label>
			<input type="text" name="naam" value="{{$mix->naam}}">

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

			<label for="hoeveelheid1">Hoeveelheid 1: </label>
			<input type="number" name="hoeveelheid1" value="{{$mix->hoeveelheid1}}">

			<label for="hoeveelheid2">Hoeveelheid 2: </label>
			<input type="number" name="hoeveelheid2" value="{{$mix->hoeveelheid2}}">

			<label for="hoeveelheid3">Hoeveelheid 3: </label>
			<input type="number" name="hoeveelheid3" value="{{$mix->hoeveelheid3}}">

			<label for="omschrijving">Omschrijving: </label>
			<input type="text" name="omschrijving" value="{{$mix->omschrijving}}">

			<button id="button" type="submit" name="button" class="btn btn_update">Update</button>
		</form>
		<form id="form" action="/mix/edit/{{$mix->naam}}" method="POST">
			{{ csrf_field() }}
            {{ method_field('DELETE') }} 
			<button onclick="return confirm('Are you sure?')" id="button" type="submit" name="button" class="btn btn_delete">Delete</button>
		</form>
@endsection
