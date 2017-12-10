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

<body class="about">
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
					<a href="{{ url('/dla-zwiedzajacych')}}">dla zwiedzających</a>
				</li>
				<li class="active">
					<a href="{{ url()->current() }}">O targach</a>
				</li>
			</ul>
			<h1>O targach</h1>
		</div>
	</div>

	<div class="container-fluid info _1">
		<div class="row">
			<div class="col-xs-12 col-md-6 left">
			</div>
			<div class="col-xs-12 col-md-6 right">
				<div class="content">
					<h4>KOMPLEKSOWA WYSTAWA I POKAZ MASZYN</h4>
					<p>
						Agro Targi Wschód to kompleksowa wystawa, podczas której swoją aktualną ofertę prezentują producenci maszyn rolniczych, producenci
						nawozów, nasion, środków ochrony roślin, firmy z sektora finansowego i innych branż związanych z rolnictwem.
					</p>
					<p>
						Rolnicy przybywający na Agro Targi Wschód mają możliwość zapoznania się z kompletnym asortymentem środków produkcji i usług
						dla rolnictwa, ale nie tylko. Mogą też spotkać się bezpośrednio z przedstawicielami wszystkich liczących się instytucji
						i agencji związanych z branżą rolniczą.
					</p>
					<p>
						W trakcie II edycji Agro Targów Wschód nie zabraknie także pokazów maszyn. Będą one filmowane przy użyciu dronów, a obraz
						przekazany będzie bezpośrednio na telebim, na którym zainteresowani rolnicy będą mieli możliwość obejrzenia pracy maszyn
						w szczegółowy sposób.
					</p>
				</div>
			</div>

		</div>
	</div>
	<div class="container-fluid first-edition">
		<div class="jumbotron">
			<p>Agro Targi Wschód to ważne wydarzenie w programie rolniczych wystaw w Polsce. Jest to jedyna i największa wystawa rolnicza
				w południowo-wschodniej Polsce przy granicy z Ukrainą.</p>
		</div>
		<div class="history">
			<p>
				W dniach 17-18 czerwca 2017 roku odbyła się I edycja Agro Targów Wschód, podczas których zaprezentowało się około 80 wystawców.
				W trakcie wydarzenia, wystawę odwiedziło ok. 20 tysięcy osób z Polski, a także farmerzy i przedsiębiorcy z sąsiedniej
				Ukrainy.
			</p>
			<p>
				W ramach pierwszej edycji Agro Targów Wschód naukowcy z Uniwersytetu Rzeszowskiego zorganizowali panele seminaryjne, które
				cieszyły się dużym zainteresowaniem.
			</p>
			<p>
				Patronat honorowy nad I edycją Agro Targów Wschód w 2017 roku objęli:
				<ul>
					<li>Minister Rolnictwa Krzysztof Jurgiel</li>
					<li>Marszałek Województwa Podkarpackiego Władysław Ortyl</li>
					<li>Rektor Uniwersytetu Rzeszowskiego prof. dr hab. Sylwester Czopek</li>
					<li>Prezydent Miasta Przemyśl Robert Choma</li>
					<li>Starosta Jarosławski Tadeusz Chrzan</li>
				</ul>
				Patronat medialny nad I edycją Agro Targów Wschód w 2017 roku objęli:
				<ul>
					<li>Gazeta Codzienna Nowiny</li>
					<li>Magazyn Rolniczy Agro Profil</li>
					<li>TVP3 Rzeszów</li>
				</ul>
			</p>
			<p>
				Serdecznie zapraszamy na II edycję Agro Targów Wschód, które odbędą się 9-10 czerwca 2018 roku w godzinach 9.00- 18.00 w
				Skołoszowie, gmina Radymno. W związku z sukcesem pierwszej edycji Agro Targów Wschód podjęto bardzo aktywne działania
				reklamowe w Polsce oraz na Ukrainie.
			</p>
		</div>

	</div>
	<div class="sponsorships wider-container">
		<h3 class="gradient-text">patronat honorowy</h3>
		<hr>
		<div class="row">
			<div class="col-xs-12 col-md-2 col-md-offset-1 sponsorship">
				<img src="{{ url('/') }}/src/assets/img/partner1.png" alt="partner1">
				<h5>minister rolinictwa i rozwoju wsi</h5>
				<p>Krzysztof Jurgiel</p>
			</div>
			<div class="col-xs-12 col-md-2 sponsorship">
				<img src="{{ url('/') }}/src/assets/img/partner2.png" alt="partner2">
				<h5>MARSZAŁEK WOJEWÓDZTWA PODKARPACKIEGO</h5>
				<p>Władysław Ortyl</p>
			</div>
			<div class="col-xs-12 col-md-2 sponsorship">
				<img src="{{ url('/') }}/src/assets/img/partner3.png" alt="partner3">
				<h5>starosta jarosławski</h5>
				<p>Tadeusz Chrzan</p>
			</div>
			<div class="col-xs-12 col-md-2 sponsorship">
				<img src="{{ url('/') }}/src/assets/img/partner4.png" alt="partner4">
				<h5>rektor uniwersytetu rzrszowskiego</h5>
				<p>Prof. dr. hab. Sylwester Czopek</p>
			</div>
			<div class="col-xs-12 col-md-2 sponsorship">
				<img src="{{ url('/') }}/src/assets/img/partner5.png" alt="partner5">
				<h5>prezydent miasta przemyśla</h5>
				<p>Robert Choma</p>
			</div>
		</div>
	</div>
	<div class="container-fluid info _2">
		<div class="row">
			<div class="col-xs-12 col-md-6 left">
				<div class="content">
					<h4>Serdecznie zapraszamy</h4>
					<p>
						na II edycje: Agro Targi Wschód, które odbędą się 9-10 czerwca 2018 roku w godzinach 9.00- 18.00 w Skołoszowie, gmina Radymno.
					</p>
					<p>
						W związku z sukcesem pierwszej edycji Agro Targów Wschód podjęto bardzo aktywne działania reklamowe w Polsce, jak i na Ukrainie.
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 right">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row see-more">
			<h3>zobacz również</h3>
			<hr>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/IDEA.png" alt="idea targów">
					<h4>Idea targów</h4>
					<p>Międzynarodowy charakter i transgraniczność targów, bezpośrednie sąsiedztwo z Ukrainą oraz liberalizacja wymiany handlowej
						między Ukrainą i Unią Europejską są impulsem do podjęcia na tym obszarze imprez targowo-wystawienniczych.</p>
					<a href="{{ url('/idea') }}" class="">czytaj</a>
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
					<img class="icon" src="{{ url('/') }}/src/assets/img/download.png" alt="o targach">
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