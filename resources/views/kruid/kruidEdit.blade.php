@extends('kruid.layout')
@section('content')
		<form id="form" action="{{action('KruidController@update', $kruid['kruid'])}}" method="POST">
			{{ csrf_field() }}
            {{ method_field('PATCH') }}
			<label for="kruid">Kruid: </label>
			<input type="text" name="kruid" value="{{$kruid->kruid}}">
			<button id="button" type="submit" name="button">Edit</button>
		</form>
        <form id="form" action="{{action('KruidController@destroy', $kruid['kruid'])}}" method="POST">
			{{ csrf_field() }}
            {{ method_field('DELETE') }}
			<button id="button" type="submit" name="button">Delete</button>
		</form>
@endsection