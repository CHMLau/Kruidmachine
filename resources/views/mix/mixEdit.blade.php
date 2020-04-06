@extends('mix.layoutingelogd')
@section('content')
		<form id="form" action="/mix/edit/{{$mix->naam}}" method="POST">
			{{ csrf_field() }}
            {{ method_field('PATCH') }}
			<label for="naam">Name: </label>
			<input type="text" name="naam" value="{{$mix->naam}}">

			<select name="Spice 1">
			@foreach($kruid as $kruiden)
			
				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>

			@endforeach
			</select>

			<select name="Spice 2">
			@foreach($kruid as $kruiden)

				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>

			@endforeach
			</select>

			<select name="Spice 3">
			@foreach($kruid as $kruiden)

				<option value="{{$kruiden->kruid}}">{{$kruiden->kruid}}</option>

			@endforeach
			</select>

			<select name="Quantity Spice 1">
				<option value="1/2 Teaspoon">1/2 Teaspoon</option>
				<option value="Teaspoon">Teaspoon</option>
				<option value=" 1.5 Teaspoon">1.5 Teaspoon</option>
				<option value="2 Teaspoon">2 Teaspoon</option>
			</select>

			<select name="Quantity Spice 2">
				<option value=""></option>
				<option value="1/2 Teaspoon">1/2 theelepel</option>
				<option value="Teaspoon"> Teaspoon</option>
				<option value=" 1.5 Teaspoon">1.5 Teaspoon</option>
				<option value="2 Teaspoon">2 Teaspoon</option>
			</select>

			<select name="Quantity Spice 3">
				<option value=""></option>
				<option value="1/2 Teaspoon">1/2 Teaspoon</option>
				<option value="Teaspoon"> Teaspoon</option>
				<option value=" 1.5 Teaspoon">1.5 Teaspoon</option>
				<option value="2 Teaspoon">2 Teaspoon</option>
			</select>

			<label for="Description">Description: </label>
			<input type="text" name="Description" value="{{$mix->omschrijving}}">

			<button id="button" type="submit" name="button" class="btn btn_update">Update</button>
		</form>
		<form id="form" action="/mix/edit/{{$mix->naam}}" method="POST">
			{{ csrf_field() }}
            {{ method_field('DELETE') }} 
			<button onclick="return confirm('Are you sure?')" id="button" type="submit" name="button" class="btn btn_delete">Delete</button>
		</form>
@endsection
