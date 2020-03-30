@extends('mix.layout')
@section('content')
	<div class="grid_mix_container">
    @foreach($mix as $mix)
        <!-- <a href="{{route('editmix', $mix->naam)}}"> <h1>{{$mix->naam}}</h1></a> -->
	
		<a class="gridlink" href="{{route('editmix', $mix->naam)}}">	
			<div class='grid_mix_item'>
				<a href="{{route('editmix', $mix->naam)}}"> <h1>{{$mix->naam}}</h1></a>
				<img class='item_image_mix'>
			</div>
		</a>
    @endforeach
		<a href="{{ url('/mix/nieuw') }}" class="btn_nieuw">nieuw mix <div class="btn_plus">+</div></a>
	</div>
@endsection