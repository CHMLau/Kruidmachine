@extends('kruid.layout')

@section('content')
		<form id="form" action="{{action('KruidController@update', $kruid['kruid'])}}" method="POST">
			{{ csrf_field() }}
      {{ method_field('PATCH') }}
			<label for="kruid">Kruid: </label>
			<input type="text" name="kruid" value="{{$kruid->kruid}}">
			<button id="button" type="submit" name="button" class="btn btn_update">Update</button>
			<form enctype="multipart/form-data">
				{{ csrf_field() }}
				<label for="image">Choose Image: </label>
				<input type="file" name="image"/>
				<button id="button" type="submit" name="button" class="btn btn_update">Upload Foto</button>
			</form>
		</form>

  	<form id="form" action="{{action('KruidController@destroy', $kruid['kruid'])}}" method="POST">
			{{ csrf_field() }}
      {{ method_field('DELETE') }}
			<button onclick="return confirm('Are you sure?')" id="button" type="submit" name="button" class="btn btn_delete">Delete</button>
		</form>
@endsection
