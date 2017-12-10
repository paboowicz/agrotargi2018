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
					<a href="{{ url()->current() }}">reklama</a>
				</li>
			</ul>
			<h1>Reklama</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 no-padding" style="text-align: center">
				<h3>reklamy</h3>
				<table>
					<tr>
						<td>Typ reklamy</td>
						<td>Cena</td>
					</tr>
					<tr>
						<td>Kolportaż materiałów reklamowych na terenie targów (1 osoba/ dzień)</td>
						<td>60,00 pln</td>
					</tr>
					<tr>
						<td>Reklama przez system nagłośnienia na targach - emisja za 2 dni (dwie emisje każdego dnia - łącznie 4 emisje - czas
							trwania 1. emisji do 30 sekund)</td>
						<td>150,00 pln</td>
					</tr>
					<tr>
						<td>Logo (firmy, marki) na ściance w centralnym punkcie Agro Targów Wschód</td>
						<td>150,00 pln</td>
					</tr>
					<tr>
						<td>Baner/flaga przy głównej alei targowej </td>
						<td>150,00 pln</td>
					</tr>
					<tr>
						<td>Baner/flaga na ogrodzeniu przy wjeździe na wystawę (2 x 1,5 m)</td>
						<td>150,00 pln</td>
					</tr>
					<tr>
						<td>Baner/flaga z widokiem na autostradę A4</td>
						<td>150,00 pln</td>
					</tr>
					<tr>
						<td>Baner/flaga z widokiem na drogę krajową77</td>
						<td>150,00 pln</td>
					</tr>
					<tr>
						<td>Inne do uzgodnienia z Organizatorem</td>
						<td>cena do uzgodnienia</td>
					</tr>
				</table>
				<p>*podane kwoty są cenami netto</p>
				<span>
					<a href="{{ url('/') }}/src/assets/pdf/Reklama-na-targach.pdf">pobierz cennik</a>
				</span>
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
					<a href="{{ url('/dojazd') }}" class="">czytaj</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 no-padding">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/xyz.png" alt="">
					<h4>Reklama</h4>
					<p>W trakcie II edycji Agro Targów Wschód nasi wystawcy będą mieć różne możliwości reklamowe, za dodatkową opłatą. Szczegóły
						wkrótce.
					</p>
					<a href="{{ url('/reklama') }}" class="">czytaj</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 no-padding">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/REGULAMIN.png" alt="">
					<h4>Regulamin</h4>
					<p>Regulaminy wystawy i pokazów dostępne są do pobrania w wersji pdf. Warunkiem udziału w wystawie jest akceptacja wyżej
						wymienionych Regulaminów. </p>
					<a href="{{ url('/regulamin') }}" class="">czytaj</a>
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