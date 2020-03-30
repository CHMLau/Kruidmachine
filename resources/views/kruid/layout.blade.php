<!DOCTYPE html>
<meta lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type='text/css' href="{{ URL::asset('css/main.css') }}"/>
	<title>Kruid </title>
</head>
	<body>
		<nav>
			<a href="">
				<!-- <img src="{{ asset('img/logo.png') }}" alt=""> -->
				<img src="https://i.imgur.com/B5rIWok.png" title="source: imgur.com" />
			</a>
			<ul>
				<li>
					<a href="{{ url('/')}}">home</a>         
					<div class="nav__line"></div>
				</li>
				<div class="streepje">_</div>
				<li>
					<a class="active" href="{{url ('/kruid') }}">spices</a>         
					<!-- <div class="nav__line"></div> -->
				</li>
				<div class="streepje">_</div>
				<li>
					<a href="{{ url('/mix')}}">mixes</a>         
					<div class="nav__line"></div>
				</li>
				<div class="streepje">_</div>
				<li>
					<a href="{{ url('/login')}}">login</a>
					<div class="nav__line"></div>
				</li>
			</ul>
		</nav>
	
		<main>
			@yield('content')
		</main>
	</body>
</meta>