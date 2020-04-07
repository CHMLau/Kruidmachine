@extends('kruid.layout')

@section('content')
<div class='gridcontainer'>
		@foreach($kruid as $kruid)
			<!--<li href="{{route('editkruid', $kruid)}}"> <h1>{{$kruid->kruid}}</h1></a>-->
			<a class="gridlink">
				<div class='griditem'>
					<p class='item_description'>{{$kruid->kruid}}</p>
					<img class='item_image' src='/img/{{$kruid->img_path}}'>
				</div>
			</a>
		@endforeach
</div>
    
@endsection