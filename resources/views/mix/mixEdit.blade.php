@extends('mix.layoutingelogd')
@section('content')
		@if (session('error'))
			<div class="error">{{ session('error') }}</div>
		@endif

		<a href="{{ url()->previous() }}" class="backButton">&#10094; back</a>	
	<div>
		<form id="mix_editform" action="/mix/edit/{{$mix->naam}}" method="POST">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}
			<label for="edit">Edit</label>
			<label for="naam">Name: </label>
			<input type="text" name="naam" value="{{$mix->naam}}">

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
				<option value="1/2 theelepel">1/2 Teaspoon</option>
				<option value="theelepel">Teaspoon</option>
			</select>

			<label for="hoeveelheid2">Amount Spice 2: </label>
			<select name="hoeveelheid2">
				<option selected disabled>Choose an Amount</option>
				<option value=""></option>
				<option value="1/2 theelepel">1/2 theelepel</option>
				<option value="theelepel"> Teaspoon</option>
			</select>

			<label for="hoeveelheid3">Amount Spice 3: </label>
			<select name="hoeveelheid3">
				<option selected disabled>Choose an Amount</option>
				<option value=""></option>
				<option value="1/2 theelepel">1/2 theelepel</option>
				<option value="theelepel"> Teaspoon</option>
			</select>
			
			<!-- <label for="hoeveelheid1">Hoeveelheid 1: </label>
			<input type="number" name="hoeveelheid1" value="">
			
			<label for="hoeveelheid2">Hoeveelheid 2: </label>
			<input type="number" name="hoeveelheid2" value="">
			
			<label for="hoeveelheid3">Hoeveelheid 3: </label>
			<input type="number" name="hoeveelheid3" value=""> -->

			<label for="omschrijving">Description: </label>
			<input type="text" name="omschrijving" value="{{$mix->omschrijving}}">

			<button id="button" type="submit" name="button" class="btn btn_update">Update</button>
			
		</form>
	
		<form id="form_delete"action="/mix/edit/{{$mix->naam}}" method="POST">
			{{ csrf_field() }}
			{{ method_field('DELETE') }} 
			<button onclick="return confirm('Are you sure?')" type="submit" name="button" class="btn btn_delete">Delete</button>
		</form>
	</div>
	
@endsection
