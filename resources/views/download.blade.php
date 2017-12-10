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

<body class="downloads">
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
					<a href="{{ url('/dla-zwiedzajacych') }}">dla zwiedzających</a>
				</li>
				<li class="active">
					<a href="{{ url()->current() }}">Do pobrania</a>
				</li>
			</ul>
			<h1>Do pobrania</h1>
		</div>
	</div>
	<div class="jumbotron download">
		<img class="icon" src="{{ url('/') }}/src/assets/img/download.png" alt="o targach">
		<h2>Do pobrania</h2>
		<p>W tej zakładce znajdziecie wszystkie niezbędne pliki do pobrania: Program targów, Plan targów, Lista wystawców, Katalog.
			Pliki do pobrania dostępne bliżej wydarzenia</p>
	</div>
	<div class="container">
		<div class="row files">
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="info-banner download first">
					<img class="icon" src="{{ url('/') }}/src/assets/img/program.png" alt="o targach">
					<h4>Program targów</h4>
					<p>W trakcie II edycji Agro Targów Wschód przewidziane jest wiele atrakcji, a także organizowane będą konkursy, związane
						z branżą rolniczą. Szczegóły wkrótce.</p>
					<a href="#" class="">pobierz pdf</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="info-banner download">
					<img class="icon" src="{{ url('/') }}/src/assets/img/plan.png" alt="o targach">
					<h4>Plan targów</h4>
					<p>Tereny wystawowe obejmują kilkanaście hektarów i znajdują się bezpośrednio przy węźle Przemyśl autostrady A4. Szczegółowy
						Plan Targów dostępny bliżej wydarzenia.</p>
					<a href="#" class="">pobierz pdf</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="info-banner download">
					<img class="icon" src="{{ url('/') }}/src/assets/img/lista.png" alt="o targach">
					<h4>Lista wystawców</h4>
					<p>W I Edycji „Agro Targi Wschód” wzięło udział ponad 80 wystawców i ok. 20 tysięcy zwiedzających, w tym farmerzy i przedsiębiorcy
						z Ukrainy. Lista wystawców dostępna bliżej wydarzenia.</p>
					<a href="#" class="">pobierz pdf</a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3">
				<div class="info-banner download">
					<img class="icon" src="{{ url('/') }}/src/assets/img/katalog.png" alt="o targach">
					<h4>Katalog</h4>
					<p>Bezpośrednio przed II edycją „Agro Targi Wschód” dostępny będzie Katalog Wystawców 2018 do pobrania przez stronę www
						i dostępny podczas wydarzenia.</p>
					<a href="#" class="">pobierz pdf</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row see-more">
			<h3>zobacz również</h3>
			<hr>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/OTARGACH.png" alt="idea targów">
					<h4>O targach</h4>
					<p>Agro Targi Wschód to kompleksowa wystawa, podczas której swoją aktualną ofertę prezentują producenci maszyn rolniczych,
						producenci nawozów, nasion, środków ochrony roślin, firmy z sektora finansowego i innych branż związanych z rolnictwem.</p>
					<a href="{{ url('/o-targach') }}" class="">czytaj</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/gallery.png" style="margin-top: 15px;" alt="Galeria">
					<h4>Galeria</h4>
					<p>Zapraszamy do obejrzenia zdjęć z I edycji Agro Targów Wschód, która odbyła się 17-18 czerwca 2017 roku. </p>
					<a href="{{ url('/galeria') }}" class="">zobacz</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/IDEA.png" alt="o targach">
					<h4>Idea targów</h4>
					<p>Międzynarodowy charakter i transgraniczność targów, bezpośrednie sąsiedztwo z Ukrainą oraz liberalizacja wymiany handlowej
						między Ukrainą i Unią Europejską są impulsem do podjęcia na tym obszarze imprez targowo-wystawienniczych.</p>
					<a href="{{ url('/idea') }}" class="">przeglądaj</a>
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