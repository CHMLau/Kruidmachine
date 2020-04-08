@extends('kruid.layoutingelogd')
@section('content')

	<div class="editContainer">

		<form class="editForm" id="form" action="{{action('KruidController@update', $kruid['kruid'])}}" method="POST">
			{{ csrf_field() }}
            {{ method_field('PATCH') }}
			<label for="kruid">Kruid: </label>
			<input type="text" name="kruid" value="{{$kruid->kruid}}">
			<button id="button" type="submit" name="button" class="btn kruidButtonUpdate">Update</button>
		</form>

        <form class="" id="form" action="{{action('KruidController@destroy', $kruid['kruid'])}}" method="POST">
			{{ csrf_field() }}
            {{ method_field('DELETE') }}
			<button onclick="return confirm('Are you sure?')" id="button" type="submit" name="button" class="btn btn_delete kruidEditDelete">Delete</button>
		</form>
	</div>
@endsection