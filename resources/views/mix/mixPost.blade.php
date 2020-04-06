@extends('mix.layoutingelogd')
@section('content')
		<form id="form" action="/mix/nieuw" method="POST">
			{{ csrf_field() }}
			<label for="naam">Name: </label>
			<input type="text" name="naam" value="">

			<label for="kruid1">Spice 1: </label>
			<select name="kruid1">
			<option selected disabled>Choose a Spice</option>
			@foreach($kruid as $kruiden)
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>			
			@endforeach
			</select>
			
			<label for="kruid2">Spice 2: </label>
			<select name="kruid2">
			<option selected disabled>Choose a Spice</option>
			@foreach($kruid as $kruiden)
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>
			@endforeach
			</select>
			
			<label for="kruid3">Spice 3: </label>
			<select name="kruid3">
			<option selected disabled>Choose a Spice</option>
			@foreach($kruid as $kruiden)	
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>		
			@endforeach
			</select>

			<label for="Hoeveelheid1">Amount Spice 1: </label>
			<select name="hoeveelheid1">
			<option selected disabled>Choose an Amount</option>
				<option value="1/2 Teaspoon">1/2 Teaspoon</option>
				<option value="Teaspoon">Teaspoon</option>
				<option value=" 1.5 Teaspoon">1.5 Teaspoon</option>
				<option value="2 Teaspoon">2 Teaspoon</option>
			</select>

			<label for="hoeveelheid2">Amount Spice 2: </label>
			<select name="hoeveelheid2">
				<option selected disabled>Choose an Amount</option>
				<option value=""></option>
				<option value="1/2 Teaspoon">1/2 theelepel</option>
				<option value="Teaspoon"> Teaspoon</option>
				<option value=" 1.5 Teaspoon">1.5 Teaspoon</option>
				<option value="2 Teaspoon">2 Teaspoon</option>
			</select>

			<label for="hoeveelheid3">Amount Spice 3: </label>
			<select name="hoeveelheid3">
				<option selected disabled>Choose an Amount</option>
				<option value=""></option>
				<option value="1/2 Teaspoon">1/2 theelepel</option>
				<option value="Teaspoon"> Teaspoon</option>
				<option value=" 1.5 Teaspoon">1.5 Teaspoon</option>
				<option value="2 Teaspoon">2 Teaspoon</option>
			</select>
			
			<!-- <label for="hoeveelheid1">Hoeveelheid 1: </label>
			<input type="number" name="hoeveelheid1" value="">
			
			<label for="hoeveelheid2">Hoeveelheid 2: </label>
			<input type="number" name="hoeveelheid2" value="">
			
			<label for="hoeveelheid3">Hoeveelheid 3: </label>
			<input type="number" name="hoeveelheid3" value=""> -->

			<label for="omschrijving">Description: </label>
			<input type="text" name="omschrijving" value="">
			<button id="button" type="submit" name="button" class="btn">Post</button>
		</form>
@endsection
