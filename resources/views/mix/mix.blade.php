@extends('mix.layout')
@section('content')
	<div class="grid_mix_container">
    @foreach($mix as $mix)
        <!-- <a href="{{route('editmix', $mix->naam)}}"> <h1>{{$mix->naam}}</h1></a> -->

		<p class="gridlink">
			<div class='grid_mix_item'>
				<a href="{{route('editmix', $mix->naam)}}"> <h1>{{$mix->naam}}</h1></a>
				<ol>
					<li><h2>{{$mix->kruid1}}</h2></li>
					<li><h2>{{$mix->kruid2}}</h2></li>
					<li><h2>{{$mix->kruid3}}</h2></li>
				</ol>
			</div>
		</p>
    @endforeach
		<!-- <a href="{{ url('/mix/nieuw') }}" class="btn_nieuw">nieuwe mix <div class="btn_plus">+</div></a> -->
	</div>
@endsection
