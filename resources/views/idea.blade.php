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

<body class="idea">
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
					<a href="{{ url()->current() }}">idea targów</a>
				</li>
			</ul>
			<h1>Idea targów</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<p class="introduction">Międzynarodowy charakter, transgraniczność, bezpośrednie sąsiedztwo z Ukrainą oraz liberalizacja wymiany handlowej między
				Ukrainą a Unią Europejską stały się impulsem do podjęcia na tym obszarze organizacji imprez targowo-wystawienniczych.</p>
		</div>
		<div class="row banner">
			<img src="{{ url('/') }}/src/assets/img/51.png" alt="banner">
		</div>
		<div class="row potential">
			<h3>Olbrzymi potencjał</h3>
			<p>Z uwagi na olbrzymi potencjał rozwoju sektora rolnego po obu stronach granicy, wynikający przede wszystkim z bogactwa
				zasobów ziemi rolnej, w tym unikatowej w skali świata wysokiej jakości czarnoziemów, adresatami Agro Targów Wschód są
				przedsiębiorcy rolni oraz producenci, dostawcy środków produkcji i usług branży rolniczej z Polski i Ukrainy.</p>
		</div>
	</div>

	<div class="row target no-padding">
		<div class="col-xs-12 col-md-6 image right">
		</div>
		<div class="descr">
			<h4>Podstawowy cel</h4>
			<p>Podstawowym celem, który przyświeca organizatorom targów jest budowanie oddolnych więzi gospodarczych z sąsiednią Ukrainą.</p>
		</div>
	</div>
	<div class="row advantage no-padding">
		<div class="col-xs-12 col-md-6 image left">
		</div>
		<div class="descr">
			<h4>Główni adresaci</h4>
			<p>Adresatami Agro Targów Wschód są przede wszystkim przedsiębiorcy rolni oraz producenci i dostawcy środków produkcji oraz
				usług branży rolniczej z Polski i Ukrainy.</p>
		</div>
	</div>
	<div class="row localization no-padding">
		<div class="col-xs-12 col-md-6 image right">
		</div>
		<div class="descr">
			<h4>Korzystna lokalizacja</h4>
			<p>Tereny wystawowe znajdują się bezpośrednio przy węźle Przemyśl autostrady A4, w odległości 25 km od największego polsko-ukraińskiego
				przejścia granicznego Korczowa-Krakowiec, znajdującego się na głównym szlaku komunikacyjnym łączącym kraje Europy Zachodniej
				z krajami Dalekiego Wschodu (Jedwabny Szlak).</p>
		</div>
	</div>

	<div class="container">
		<div class="row see-more">
			<h3>zobacz również</h3>
			<hr>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/OTARGACH.png" alt="o targach">
					<h4>O targach</h4>
					<p>Agro Targi Wschód to kompleksowa wystawa, podczas której swoją aktualną ofertę prezentują producenci maszyn rolniczych,
						producenci nawozów, nasion, środków ochrony roślin, firmy z sektora finansowego i innych branż związanych z rolnictwem.</p>
					<a href="{{ url('/o-targach') }}" class="">czytaj</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/gallery.png" style="margin-top: 15px;" alt="o targach">
					<h4>Galeria</h4>
					<p>Zapraszamy do obejrzenia zdjęć z I edycji Agro Targów Wschód, która odbyła się 17-18 czerwca 2017 roku.</p>
					<a href="{{ url('/galeria') }}" class="">zobacz</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/download.png" style="margin-top: 5px;" alt="o targach">
					<h4>Do pobrania</h4>
					<p>W tej zakładce znajdziecie wszystkie niezbędne pliki do pobrania: Regulamin targów, Regulamin pokazów, Formularz zgłoszeniowy
						dla wystawcy, Formularz zgłoszeniowy dla handlu drobnego, Gastronomia, Cennik.</p>
					<a href="{{ url('/do-pobrania') }}" class="">przeglądaj</a>
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