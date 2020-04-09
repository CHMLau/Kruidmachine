@extends('kruid.layoutingelogd')
@section('content')

		<a href="{{ url()->previous() }}" class="backButton">&#10094; back</a>

		<form class="editForm" id="mix_editform" action="/kruid/nieuw" enctype="multipart/form-data" method="POST">
			{{ csrf_field() }}
			<label for="kruid">Spice: </label>
			<input type="text" name="kruid" value="">
			<label for="image">Foto: </label>
			<input type="file" name="image" value="">
			<button id="button" type="submit" name="button" class="btn">Post</button>
		</form>
@endsection
