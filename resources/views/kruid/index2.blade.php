@extends('kruid.layoutingelogd')

@section('content')
<div class='gridcontainer'>
		@foreach($kruid as $kruid)
			<!--<li href="{{route('editkruid', $kruid)}}"> <h1>{{$kruid->kruid}}</h1></a>-->
			<a class="gridlink" href="{{route('editkruid', $kruid)}}">
				<div class='griditem'>
					<p class='item_description'>{{$kruid->kruid}}</p>
					<img class='item_image' src='/img/{{$kruid->img_path}}'>
				</div>
			</a>
		@endforeach
</div>
<div class="btn_plus_footer">
	<a href="{{ url('/kruid/nieuw') }}" class="btn_nieuw">New spice <div class="btn_plus">+</div></a>
	<a href="{{ url()->previous() }}" class="back_btn_phone">&#10094; Back</a>
</div>

@endsection