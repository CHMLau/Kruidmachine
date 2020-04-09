@extends('mix.layoutingelogd')
@section('content')
		@if (session('error'))
			<div class="error">{{ session('error') }}</div>
		@endif
	<div class="grid_mix_container">
    @foreach($mix as $mix)
		<!-- <a href="{{route('editmix', $mix->naam)}}"> <h1>{{$mix->naam}}</h1></a> -->
		<div class="mixContainer">
			<div class="mixContainer__naam">
				<h1>{{$mix->naam}}</h1>
			</div>
			<div class="mixContainer__kruiden">
				<ol>
					<li>
						{{$mix->kruid1}}
					</li>
					<li>
						{{$mix->kruid2}}
					</li>
					<li>
						{{$mix->kruid3}}
					</li>
				</ol>
			</div>
			<div class="mixContainer__hoeveelheid">
				<ol>
					<li>
						{{$mix->hoeveelheid1}}
					</li>
					<li>
						{{$mix->hoeveelheid2}}
					</li>
					<li>
						{{$mix->hoeveelheid3}}
					</li>
				</ol>
			</div>
			<div class="mixContainer__buttons">
				<a class="editMix" href="{{route('editmix', $mix->naam)}}"><button class="mixContainer__button__edit">Edit</button></a>

				<form method="post" action="/mix/update/{{$mix->naam}}">
				{{csrf_field()}}
				@method('patch')
					<button type="submit" class="mixContainer__button__make">Make</button>	
				</form>	
			</div>
		</div>
  	@endforeach
	  <a href="{{ url('/mix/nieuw') }}" class="btn_nieuw">New mix<div class="btn_plus">+</div></a> 
	</div>
@endsection
