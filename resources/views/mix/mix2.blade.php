@extends('mix.layoutingelogd')
@section('content')
	<div class="grid_mix_container">
    @foreach($mix as $mix)
        <!-- <a href="{{route('editmix', $mix->naam)}}"> <h1>{{$mix->naam}}</h1></a> -->

		<a class="gridlink" href="{{route('editmix', $mix->naam)}}">
			<div class='grid_mix_item'>
				<a href="{{route('editmix', $mix->naam)}}"> <h1>{{$mix->naam}}</h1></a>
				<img class='item_image'>
			</div>
		</a>
		<form method="post" action="/mix/update/{{$mix->naam}}">
			{{csrf_field()}}
			@method('patch')

			<button class="makeMix" type="submit" name="button">Make</button>
		</form>

  	@endforeach
	  <a href="{{ url('/mix/nieuw') }}" class="btn_nieuw">new mix <div class="btn_plus">+</div></a> 
	</div>
@endsection
