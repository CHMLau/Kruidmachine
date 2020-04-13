@extends('kruid.layout')

@section('content')
<div class='gridcontainer'>
		@foreach($kruid as $kruid)
			<!--<li href="{{route('editkruid', $kruid)}}"> <h1>{{$kruid->kruid}}</h1></a>-->
			<a class="gridlink">
				<div class='griditem'>
					<p class='item_description'>{{$kruid->kruid}}</p>
<<<<<<< HEAD
					<img class='item_image' src="img/kruidImages/{{$kruid->img_path}}"/>
=======
					<img class='item_image' src='/img/{{$kruid->img_path}}'>
>>>>>>> 06ef1159ccdbc8e4de7b77bbe0e40a920a76bf27
				</div>
			</a>
		@endforeach
</div>

@endsection
