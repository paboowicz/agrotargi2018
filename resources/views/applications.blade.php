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

<body class="forExhibitors-application">
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
					<a href="{{ url('/dla-wystawcow') }}">dla wystawców</a>
				</li>
				<li class="active">
					<a href="{{ url()->current() }}">Zgłoszenia</a>
				</li>
			</ul>
			<h1>Zgłoszenia</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 no-padding">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/ZGLOSZENIA.png" alt="">
					<h4>Formularze zgłoszeniowe na II edycję „Agro Targi Wschód” 2018 są dostępne w wersji elektronicznej. Uprzejmie prosimy
						o przesłanie wypełnionego formularza zgłoszeniowego w formie papierowej na adres: P.P.H.U. Sawa Expo Stanisław Sawa,
						Nowosiółki 79, 22-652 Telatyn i elektronicznej na adres e-mail: biuro@agrotargiwschod.pl.
						<br>
						<b> Zgłoszenie z rabatem do 27 kwietnia 2018 roku.</b>
					</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid no-padding">

		<div class="row advantage no-padding">
			<div class="col-xs-6 image left">
			</div>
			<div class="descr">
				<p>
					Szczegółowych informacji udzielamy:
					<br>
					<br> pod numerami telefonów:
					<br>
					<a href="#">
						<b>606 418 785</b>
					</a> lub
					<a href="#">
						<b>604 750 443</b>
					</a>
					<br>
					<br> lub e-mail:
					<a href="#">
						<b>biuro@agrotargiwschod.pl</b>
					</a>
				</p>
			</div>
		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 no-padding">
				<div class="text-box">
					<p>Warunkiem udziału w wystawie jest:</p>
					<ul>
						<li>
							przesłanie organizatorowi prawidłowo wypełnionego formularza najpóźniej
							<span>
								<b>do 4 maja 2018 roku</b>
							</span>;
						</li>
						<li>
							zaakceptowanie regulaminów wystawy;
						</li>
						<li>
							wniesienie stosownych opłat najpóźniej
							<span>
								<b>do dnia 1 czerwca 2018 r.</b>
							</span>
						</li>
						<br>
						<li class="dllink">
							<a target="_blank" href="{{ url('/') }}/src/assets/pdf/Cennik-dla-wystawcow.pdf">Cennik dla wystawców</a>
						</li>
						<li class="dllink">
							<a target="_blank" href="{{ url('/') }}/src/assets/pdf/Formularz-zgloszeniowy-dla-wystawcow.pdf">Formularz zgłoszeniowy dla wystawców</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 no-padding">
				<div class="text-box">
					<h3>Formularz rejestracyjny dla handlu drobnego:</h3>
					<br>
					<p>Firmy, których produkty nie są związane z branżą rolniczą prosimy o wypełnienie formularza przeznaczonego dla handlu
						drobnego.
						<br>
						<br> Uprzejmie prosimy o przesłanie wypełnionego formularza zgłoszeniowego w formie papierowej na adres: P.P.H.U. Sawa
						Expo Stanisław Sawa, Nowosiółki 79, 22-652 Telatyn i elektronicznej elektronicznej na adres e-mail:
						<a href="mailto: biuro@agrotargiwschod.pl">biuro@agrotargiwschod.pl</a>
					</p>
					<br>
					<ul>
						<li class="dllink">
							<a target="_blank" href="{{ url('/') }}/src/assets/pdf/Cennik-dla-handlu-drobnego.pdf">Cennik dla handlu drobnego</a>
						</li>
						<li class="dllink">
							<a target="_blank" href="{{ url('/') }}/src/assets/pdf/Formularz-zgloszeniowy-handel-drobny.pdf">Formularz zgłoszeniowy dla handlu drobnego</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 no-padding">
				<div class="text-box">
					<h3>Gastronomia:</h3>
					<p>Przedstawicieli firm gastronomicznych (catering / sprzedaż piwa) prosimy o bezpośredni kontakt z Dyrektorem Targów.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 no-padding">
				<div class="see-more">
					<span>zobacz również</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-4 no-padding">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/DOJAZD.png" alt="">
					<h4>Dojazd i hotele</h4>
					<p>Specjalnie dla naszych wystawców nawiązaliśmy współpracę z Bazą Noclegową dostępną w pobliżu II edycji Agro Targów Wschód.</p>
					<a href="for-exhibitors-drive.html" class="">czytaj</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 no-padding">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/xyz.png" alt="">
					<h4>Reklama</h4>
					<p>W trakcie II edycji Agro Targów Wschód nasi wystawcy będą mieć różne możliwości reklamowe, za dodatkową opłatą. Szczegóły
						wkrótce.</p>
					<a href="for-exhibitors-comm.html" class="">czytaj</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 no-padding">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/REGULAMIN.png" alt="">
					<h4>Regulamin</h4>
					<p>Regulaminy wystawy i pokazów dostępne są do pobrania w wersji pdf. Warunkiem udziału w wystawie jest akceptacja wyżej
						wymienionych Regulaminów. </p>
					<a href="for-exhibitors-regulations.html" class="">czytaj</a>
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