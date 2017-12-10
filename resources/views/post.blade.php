<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Sawa Expo</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="{{ url('/') }}/dist/css/main.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="{{ url('/') }}/dist/js/scripts.min.js"></script>

</head>

<body class="news">
	<header class="header">
		<div class="logo">
			<a href="{{ url('/') }}/">
				<img src="{{ url('/') }}/src/assets/img/logo.png" alt="Logo">
			</a>
		</div>
		<div class="hamburger"></div>
		<nav>
			<ul class="menu">
				<li>
					<a href="{{ url('/') }}">Start</a>
				</li>
				<li>
					<a href="{{ url('/aktualnosci') }}">Aktualności</a>
				</li>
				<li>
					<a href="{{ url('/dla-zwiedzajacych') }}">Dla zwiedzających</a>
				</li>
				<li>
					<a href="{{ url('/dla-wystawcow') }}">Dla wystawców</a>
				</li>
				<li>
					<a href="{{ url('/kontakt') }}">Kontakt</a>
				</li>
				<li class="flag GB">
					<a href="#">
						<img src="{{ url('/') }}/src/assets/img/gbflag.png" alt="wielka brytania">
					</a>
				</li>
				<li class="flag UK">
					<a href="#">
						<img src="{{ url('/') }}/src/assets/img/ukraineflag.png" alt="ukraina">
					</a>
				</li>
			</ul>
		</nav>
	</header>
	<div class="jumbotron">
		<div class="container">
			<ul class="breadcrumbs">
				<li>
					<a href="{{ url('/') }}">start</a>
				</li>
				<li>
					<a href="{{ url('/aktualnosci') }}">aktualności</a>
				</li>
				<li class="active">
					<a href="{{ url()->current() }}">{{ $post->title }}</a>
				</li>
			</ul>
			<h1>Aktualności</h1>
		</div>
	</div>
	<div class="singleNews container">
		<div class="newsHeader">
			<img src="{{ url($post->image()) }}" alt="">
		</div>
		<div class="newsContent">
			<p class="date">{{ $post->publish_at }}</p>
			<h3 class="title">{{ $post->title }}</h3>
			<p class="description">{!! $post->long_text !!}</p>
			
		</div>
		<div class="newsNav">
            @if($prev)
			<a class="prev" href="{{ url('aktualnosci'.$prev->url) }}">poprzedni wpis</a>
            @endif

            @if($next)
			<a class="next" href="{{ url('aktualnosci'.$next->url) }}">następny wpis</a>
            @endif
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-3">
					<a href="{{ url('/') }}">
						<img src="{{ url('/') }}/src/assets/img/logowhite.png" alt="targi">
					</a>
					<img src="{{ url('/') }}/src/assets/img/sawalogowhite.png" alt="sawa">
					<p>P.P.H.U. Sawa Expo Stanisław Sawa
						<br> Nowosiółki 79, 22-652 Telatyn
						<br> NIP: 921 133 95 62
						<br> REGON: 950280142
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<ul>Start
						<li>
							<a href="{{ url('/aktualnosci') }}">Aktualności</a>
						</li>
						<li>
							<a href="{{ url('/dla-zwiedzajacych') }}">Dla zwiedzających</a>
						</li>
						<li>
							<a href="{{ url('/dla-wystawcow') }}">Dla wystawców</a>
						</li>
						<li>
							<a href="{{ url('/kontakt') }}">Kontakt</a>
						</li>
						<li>
							<a href="{{ url('/o-targach') }}">Agro Targi Wschód</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<ul>Dla zwiedzających
						<li>
							<a href="{{ url('/idea') }}">Idea targów</a>
						</li>
						<li>
							<a href="{{ url('/o-targach') }}">O targach</a>
						</li>
						<li>
							<a href="{{ url('/galeria') }}">Galeria</a>
						</li>
						<li>
							<a href="{{ url('/do-pobrania') }}">Do pobrania</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<ul>Dla wystawców
						<li>
							<a href="{{ url('/zgloszenia') }}">Zgłoszenia</a>
						</li>
						<li>
							<a href="{{ url('/regulamin') }}">Regulamin</a>
						</li>
						<li>
							<a href="{{ url('/dojazd') }}">Dojazd i hotele</a>
						</li>
						<li>
							<a href="{{ url('/reklama') }}">Reklama</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row copyrights">
				<p>Copyright © 2017 | AGRO TARGI WSCHÓD, SAWA EXPO - Wszystkie prawa zastrzeżone</p>
				<p>Realizacja:
					<a href="http://interactivevision.pl">interactivevision.pl</a>
				</p>
			</div>
		</div>
	</footer>

</body>

</html>