@extends('kruid.layout')

@section('content')
<div class='gridcontainer'>
		@foreach($kruid as $kruid)
			<!--<li href="{{route('editkruid', $kruid)}}"> <h1>{{$kruid->kruid}}</h1></a>-->
			<a class="gridlink"href="{{route('editkruid', $kruid)}}">
				<div class='griditem'>
					<p class='item_description'>{{$kruid->kruid}}</p>
				</div>
			</a>
		@endforeach
		<a href="{{ url('/kruid') }}" class="btn">alle kruiden <div class="btn_plus">+</div></a>
</div>

@endsection
