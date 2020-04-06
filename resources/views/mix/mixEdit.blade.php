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

			<select name="hoeveelheid1">
				<option value="1/2 theelepel">1/2 theelepel</option>
				<option value="theelepel">theelepel</option>
			</select>

			<select name="hoeveelheid2">
				<option value="1/2 theelepel">1/2 theelepel</option>
				<option value="theelepel">theelepel</option>
			</select>

			<select name="hoeveelheid3">
				<option value="1/2 theelepel">1/2 theelepel</option>
				<option value="theelepel">theelepel</option>
			</select>

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
