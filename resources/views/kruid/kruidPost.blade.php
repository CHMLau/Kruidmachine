@extends('kruid.layout')
@section('content')
		<form id="form" action="/kruid/nieuw" method="POST">
			{{ csrf_field() }}
			<label for="kruid">Kruid: </label>
			<input type="text" name="kruid" value="">
			<button id="button" type="submit" name="button">Post</button>
		</form>
@endsection
