@extends('mix.layout')
@section('content')
		<form id="form" action="/mix/nieuw" method="POST">
			{{ csrf_field() }}
			<label for="naam">Naam: </label>
			<input type="text" name="naam" value="">

			<label for="kruid1">Kruid1: </label>
			<select name="kruid1">
			<option selected disabled>Kies een kruid</option>
			@foreach($kruid as $kruiden)
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>			
			@endforeach
			</select>
			
			<label for="kruid2">Kruid2: </label>
			<select name="kruid2">
			<option selected disabled>Kies een kruid</option>
			@foreach($kruid as $kruiden)
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>
			@endforeach
			</select>
			
			<label for="kruid3">Kruid3: </label>
			<select name="kruid3">
			<option selected disabled>Kies een kruid</option>
			@foreach($kruid as $kruiden)	
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>		
			@endforeach
			</select>

			<label for="Hoeveelheid1">Hoeveelheid1: </label>
			<select name="hoeveelheid1">
			<option selected disabled>Kies een hoeveelheid</option>
				<option value="1/2 theelepel">1/2 theelepel</option>
				<option value="theelepel">theelepel</option>
			</select>

			<label for="hoeveelheid2">Hoeveelheid2: </label>
			<select name="hoeveelheid2">
				<option selected disabled>Kies een hoeveelheid</option>
				<option value="1/2 theelepel">1/2 theelepel</option>
				<option value="theelepel">theelepel</option>
			</select>

			<label for="hoeveelheid3">Hoeveelheid3: </label>
			<select name="hoeveelheid3">
				<option selected disabled>Kies een hoeveelheid</option>
				<option value="1/2 theelepel">1/2 theelepel</option>
				<option value="theelepel">theelepel</option>
			</select>
			
			<!-- <label for="hoeveelheid1">Hoeveelheid 1: </label>
			<input type="number" name="hoeveelheid1" value="">
			
			<label for="hoeveelheid2">Hoeveelheid 2: </label>
			<input type="number" name="hoeveelheid2" value="">
			
			<label for="hoeveelheid3">Hoeveelheid 3: </label>
			<input type="number" name="hoeveelheid3" value=""> -->

			<label for="omschrijving">Omschrijving: </label>
			<input type="text" name="omschrijving" value="">
			<button id="button" type="submit" name="button" class="btn">Post</button>
		</form>
@endsection
