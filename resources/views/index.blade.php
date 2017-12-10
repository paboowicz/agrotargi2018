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

<body>
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
	<div class="main-jumbotron main-jumbotron2 jumbotron">

		<div class="container">
			<div class="row">
				<div class="buttons">
					<a href="https://www.youtube.com/channel/UCuCU9C1ozVR60ASLK4T1vjw/videos" target="_blank" class="">oglądaj</a>
					<a href="{{ url('/dla-wystawcow') }}" class="">zostań wystawcą</a>
					<a href="{{ url('/o-targach') }}">9-10 czerwca 2018</a>
					<a href="{{ url('/2017') }}">Agro Targi Wschód 2017</a>
				</div>
			</div>
		</div>
	</div>
	<div class="sponsorships wider-container">
		<h3 class="gradient-text">patronat honorowy</h3>
		<hr>
		<div class="row">
			<div class="col-xs-12 col-md-2 col-md-offset-1 sponsorship">
				<img src="{{ url('/') }}/src/assets/img/partner1.png" alt="partner1">
				<h5>minister rolnictwa i rozwoju wsi</h5>
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
				<h5>rektor uniwersytetu rzeszowskiego</h5>
				<p>Prof. dr. hab. Sylwester Czopek</p>
			</div>
			<div class="col-xs-12 col-md-2 sponsorship">
				<img src="{{ url('/') }}/src/assets/img/partner5.png" alt="partner5">
				<h5>prezydent miasta przemyśla</h5>
				<p>Robert Choma</p>
			</div>
		</div>
	</div>
	<div class="news container">
		<h3>Aktualności</h3>
		<div class="aside-small-header">
			<h4>Co nowego?</h4>
			<hr>
		</div>
		<div class="row">
			@foreach($posts as $post)
			<div class="col-xs-12 col-md-4 single-news">
				<img src="{{ url($post->image())}}" alt="" class="header">
				<div>
					<p class="date">{{ $post->publish_at }}</p>
					<h3 class="title">{{ $post->title }}</h3>
					<p class="description">{{ $post->info }}</p>
					<a href="{{ url('aktualnosci'.$post->url) }}">Czytaj dalej</a>
				</div>
			</div>
			@endforeach
		</div>
		<div class="row all-news">
			<a class="" href="{{ url('/aktualnosci') }}">wszystkie wpisy</a>
		</div>
	</div>
	<div class="info container-fluid" style="height: auto;">
		<h3>II Agro Targi Wschód</h3>
		<div class="row" style="height: 500px;">
			<div class="col-xs-12 col-md-6 left">
				<div class="aside-small-header">
					<h4>Zapraszamy na</h4>
					<hr>
				</div>
				<div class="content">
					<p>
						<span>II Agro Targi Wschód, które odbędą się 9-10.06.2018</p>
					<p>Skołoszów, ul. Przemyska 37, Radymno 37-550, powiat jarosławski, woj. podkarpackie, przy węźle "Przemyśl" autostrady
						A4</p>
					<a href="{{ url('/kontakt') }}">zobacz mapę dojazdu</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 right">
			</div>
		</div>
	</div>

	<div class="for-visitors ">
		<h3>Dla zwiedzających</h3>
		<div class="aside-small-header">
			<h4>Dla zwiedzających</h4>
			<hr>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="info-banner">
						<img class="icon" src="{{ url('/') }}/src/assets/img/IDEA.png" alt="idea targów">
						<h4>Idea targów</h4>
						<p>Międzynarodowy charakter i transgraniczność targów, bezpośrednie sąsiedztwo z Ukrainą oraz liberalizacja wymiany handlowej
							między Ukrainą i Unią Europejską są impulsem do podjęcia na tym obszarze imprez targowo-wystawienniczych.</p>
						<a href="{{ url('/idea') }}">czytaj</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="info-banner">
						<img class="icon" src="{{ url('/') }}/src/assets/img/OTARGACH.png" alt="o targach">
						<h4>O targach</h4>
						<p>Agro Targi Wschód to wystawa, podczas której swoją ofertę prezentują producenci maszyn rolniczych, nawozów, nasion,
							środków ochrony roślin, firmy z sektora finansowego i inne związane z branżą.</p>
						<a href="{{ url('/o-targach') }}">czytaj</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-5 image">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row files">
				<div class="col-xs-12 col-md-3">
					<div class="info-banner download">
						<img class="icon" src="{{ url('/') }}/src/assets/img/program.png" alt="o targach">
						<h4>Program targów</h4>
						<p>W trakcie II edycji Agro Targów Wschód przewidziane jest wiele atrakcji, a także organizowane będą konkursy, związane
							z branżą rolniczą. Szczegóły wkrótce.</p>
						<a href="#" class="">pobierz pdf</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="info-banner download">
						<img class="icon" src="{{ url('/') }}/src/assets/img/plan.png" alt="plan">
						<h4>Plan targów</h4>
						<p>Tereny wystawowe obejmują kilkanaście hektarów i znajdują się bezpośrednio przy węźle Przemyśl autostrady A4. Szczegółowy
							Plan Targów dostępny bliżej wydarzenia.</p>
						<a href="#" class="">pobierz pdf</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="info-banner download">
						<img class="icon" src="{{ url('/') }}/src/assets/img/lista.png" alt="lista">
						<h4>Lista wystawców</h4>
						<p>W I Edycji „Agro Targi Wschód” wzięło udział ponad 80 wystawców i ok. 20 tysięcy zwiedzających, w tym farmerzy i przedsiębiorcy
							z Ukrainy. Lista wystawców dostępna bliżej wydarzenia.</p>
						<a href="#" class="">pobierz pdf</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="info-banner download">
						<img class="icon" src="{{ url('/') }}/src/assets/img/katalog.png" alt="katalog">
						<h4>Katalog wystawców</h4>
						<p>Bezpośrednio przed II edycją „Agro Targi Wschód” dostępny będzie Katalog Wystawców 2018 do pobrania przez stronę www
							i dostępny podczas wydarzenia.</p>
						<a href="#" class="">pobierz pdf</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="for-expositors">
		<h3>Dla wystawców</h3>
		<div class="aside-small-header">
			<h4>Dla wystawców</h4>
			<hr>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<div class="info-banner">
						<img class="icon" src="{{ url('/') }}/src/assets/img/ZGLOSZENIA.png" alt="idea targów">
						<h4>Zgłoszenia</h4>
						<p>Formularze zgłoszeniowe na II edycję „Agro Targi Wschód” 2018 są dostępne w wersji elektronicznej. Uprzejmie prosimy
							o przesłanie wypełnionego formularza zgłoszeniowego w formie papierowej.</p>
						<a href="{{ url('/zgloszenia') }}" class="">czytaj</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="info-banner">
						<img class="icon" src="{{ url('/') }}/src/assets/img/REGULAMIN.png" alt="o targach">
						<h4>Regulamin</h4>
						<p>Regulaminy wystawy i pokazów dostępne są do pobrania w wersji pdf. Warunkiem udziału w wystawie jest akceptacja wyżej
							wymienionych Regulaminów. </p>
						<a href="{{ url('/regulamin') }}" class="">czytaj</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-5 image">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-5 image">
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="info-banner">
						<img class="icon" src="{{ url('/') }}/src/assets/img/DOJAZD.png" alt="idea targów">
						<h4>Dojazd i hotele</h4>
						<p>Specjalnie dla naszych wystawców nawiązaliśmy współpracę z Bazą Noclegową w pobliżu II edycji Agro Targów Wschód. Rekomendowane
							przez nas miejsca, spełnią potrzeby najbardziej wymagających. Polecana przez nas baza noclegowa dostępna wkrótce.
							</p>
						<a href="{{ url('/dojazd') }}" class="">czytaj</a>
					</div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="info-banner">
						<img class="icon" src="{{ url('/') }}/src/assets/img/xyz.png" alt="o targach">
						<h4>Reklama</h4>
						<p>W trakcie II edycji Agro Targów Wschód nasi wystawcy będą mieć różne możliwości reklamowe, za dodatkową opłatą. Szczegóły
							wkrótce.</p>
						<a href="{{ url('/reklama') }}" class="">czytaj</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="assosiates">
		<div class="container">
			<h3>Partnerzy</h3>
			<div class="aside-small-header">
				<h4>Partnerzy</h4>
				<hr>
			</div>
			<div class="row">

			</div>
		</div>
	</div>

	<div class="contact container-fluid">
		<div class="row">
			<div class="col-xs-12 col-md-6 left">
				<div class="aside-small-header">
					<h4>Kontakt</h4>
					<hr>
				</div>
				<div class="content">
					<b>Zespół organizacyjny:</b>
					<br>

					<b>Stanisław Sawa</b>
					<br> Dyrektor Targów
					<br> Tel.
					<b>+48 604 750 443</b>
					<br>
					<b>
						<a href="mailto:s.sawa@agrotargiwschod.pl">s.sawa@agrotargiwschod.pl</a>
					</b>
					<br>
					<br>

					<b>Joanna Sawa</b>
					<br> Tel.
					<b>+48 692 201 546</b>
					<br>
					<b>
						<a href="mailto:j.sawa@agrotargiwschod.pl">j.sawa@agrotargiwschod.pl</a>
					</b>
					<br>
					<br>

					<b>Jakub Gradziuk</b>
					<br> Tel.
					<b> +48 509 301 021</b>
					<br>
					<b>
						<a href="mailto:j.gradziuk@agrotargiwschod.pl">j.gradziuk@agrotargiwschod.pl</a>
					</b>
					<br>
					<br>

					<b>Adres do korespondencji:</b>
					<br> PPHU Sawa Expo Stanisław Sawa
					<br> Nowosiółki 79
					<br> 22-652 Telatyn
					<br>
					<b>+48 606 418 785</b>
					<br>
					<b>
						<a href="mailto:biuro@agrotargiwschod.pl">biuro@agrotargiwschod.pl</a>
					</b>

				</div>
			</div>
			<div class="col-xs-12 col-md-6 right hidden-xs">
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