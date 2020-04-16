@extends('kruid.layoutingelogd')
@section('content')

	<!--<a href="{{ url()->previous() }}" class="backButton">&#10094; back</a>-->

	<div class="kruidEdit_container">

		<form class="kruid_editForm" id="form" action="{{action('KruidController@update', $kruid['kruid'])}}" method="POST">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}
			<label for="edit">Edit</label>
			<label for="kruid">Kruid: </label>
			<input class="kruidEdit_input"type="text" name="kruid" value="{{$kruid->kruid}}">
			<button id="button" type="submit" name="button" class="btn kruidButtonUpdate">Update</button>
		</form>

        <form class="kruid_deleteForm" id="form" action="{{action('KruidController@destroy', $kruid['kruid'])}}" method="POST">
			{{ csrf_field() }}
            {{ method_field('DELETE') }}
			<button onclick="return confirm('Are you sure?')" id="button" type="submit" name="button" class="btn btn_delete kruidEditDelete">Delete</button>
		</form>
	</div>

	<div class="btn_plus_footer">
		<a href="{{ url()->previous() }}" class="back_btn_phone">&#10094; Back</a>	
	</div>
@endsection