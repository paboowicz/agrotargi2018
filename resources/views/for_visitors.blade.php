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

<body class="">
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
				<li class="active">
					<a href="{{ url()->current() }}">dla zwiedzających</a>
				</li>
			</ul>
			<h1>Dla zwiedzających</h1>
		</div>
	</div>

	<div class="container forVisitors">
		<div class="row">
			<div class="col-xs-12 col-md-6 no-padding">
				<div class="info-banner _1">
					<img class="icon" src="{{ url('/') }}/src/assets/img/IDEA.png" alt="">
					<h4>Idea targów</h4>
					<p>Międzynarodowy charakter i transgraniczność targów, bezpośrednie sąsiedztwo z Ukrainą oraz liberalizacja wymiany handlowej
						między Ukrainą i Unią Europejską są impulsem do podjęcia na tym obszarze imprez targowo-wystawienniczych.</p>
					<a href="{{ url('/idea') }}" class="">czytaj</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 no-padding">
				<div class="info-banner _2">
					<img class="icon" src="{{ url('/') }}/src/assets/img/OTARGACH.png" alt="">
					<h4>O targach</h4>
					<p>Agro Targi Wschód to kompleksowa wystawa, podczas której swoją aktualną ofertę prezentują producenci maszyn rolniczych,
						producenci nawozów, nasion, środków ochrony roślin, firmy z sektora finansowego i innych branż związanych z rolnictwem.</p>
					<a href="{{ url('/o-targach') }}" class="">czytaj</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 no-padding">
				<div class="info-banner _3">
					<img class="icon" src="{{ url('/') }}/src/assets/img/gallery.png" alt="">
					<h4>Galeria</h4>
					<p>Zapraszamy do obejrzenia zdjęć z I edycji Agro Targów Wschód, która odbyła się 17-18 czerwca 2017 roku.</p>
					<a href="{{ url('/galeria') }}" class="">zobacz</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 no-padding">
				<div class="info-banner _4">
					<img class="icon" src="{{ url('/') }}/src/assets/img/download.png" alt="">
					<h4>Do pobrania</h4>
					<p>W tej zakładce znajdziecie wszystkie niezbędne pliki do pobrania: Regulamin targów, Regulamin pokazów, Formularz zgłoszeniowy
						dla wystawcy, Formularz zgłoszeniowy dla handlu drobnego, Gastronomia, Cennik.</p>
					<a href="{{ url('/do-pobrania') }}" class="">czytaj</a>
				</div>
			</div>
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