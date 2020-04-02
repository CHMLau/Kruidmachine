@extends('kruid.layout')
@section('content')
		<form id="form" action="/kruid/nieuw" enctype="multipart/form-data" method="POST">
			{{ csrf_field() }}
			<label for="kruid">Kruid: </label>
			<input type="text" name="kruid" value="">
			<label for="image">Foto: </label>
			<input type="file" name="image" value="">
			<button id="button" type="submit" name="button">Post</button>
		</form>
@endsection
