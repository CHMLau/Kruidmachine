@extends('kruid.layout')

@section('content')
<div class='gridcontainer'>
		@foreach($kruid as $kruid)
			<!--<li href="{{route('editkruid', $kruid)}}"> <h1>{{$kruid->kruid}}</h1></a>-->
			<a class="gridlink"href="{{route('editkruid', $kruid)}}">
				<div class='griditem'>
					<p class='item_description'>{{$kruid->kruid}}</p>
					<img class='item_image'>
				</div>
			</a>
		@endforeach
		<a href="{{ url('/kruid/nieuw') }}" class="btn">nieuw kruid <div class="btn_plus">+</div></a>
</div>
    
@endsection