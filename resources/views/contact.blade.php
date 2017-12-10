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

<body class="contact">
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
					<a href="{{ url()->current() }}">Kontakt</a>
				</li>
			</ul>
			<h1>Kontakt</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 no-padding">
				<div class="image-box">
					<img class="" src="{{ url('/') }}/src/assets/img/mapka_v8.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-6 no-padding">
				<div class="image-contact">
					<img class="" src="{{ url('/') }}/src/assets/img/27.jpg" alt="">
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 no-padding">
				<div class="box-contact">
					<p>
						<b>Zespół organizacyjny:</b>
						<br>
						<b>Stanisław Sawa </b>
						<br> Dyrektor Targów
						<br> Tel.
						<span>+48 604 750 443</span>
						<a href="mailto:s.sawa@agrotargiwschod.pl">s.sawa@agrotargiwschod.pl</a>
						<br>
						<b>Joanna Sawa</b>
						<br> Tel.
						<span>+48 692 201 546</span>
						<br>
						<a href="mailto:j.sawa@agrotargiwschod.pl">j.sawa@agrotargiwschod.pl</a>
						<br>
						<b>Jakub Gradziuk </b>
						<br> Tel.
						<span>+48 509 301 021 </span>
						<br>
						<a href="mailto:j.gradziuk@agrotargiwschod.pl">j.gradziuk@agrotargiwschod.pl</a>

					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-6 no-padding">
				<div class="box-contact" style="padding-top: 50px;">
					<p>
						<b>Biuro wystawy:</b>
						<br> PPHU Sawa Expo Stanisław Sawa
						<br> ul. Przemyska 37, Skołoszów
						<br> 37-550 Radymno
						<br>
						<span>+48 606 418 785 </span>
						<br>
						<span>
							<a href="mailto:biuro@agrotargiwschod.pl">biuro@agrotargiwschod.pl</a>
						</span>
					</p>
					<p>
						<b>Adres do korespondencji:</b>
						<br> PPHU Sawa Expo Stanisław Sawa
						<br> Nowosiółki 79
						<br> 22-652 Telatyn
					</p>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 no-padding">
				<div class="image-contact">
					<img class="" src="{{ url('/') }}/src/assets/img/21.jpg" alt="">
				</div>
			</div>
		</div>

	</div>

	<div class="container-fluid no-padding">

		<div class="row no-padding">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8641.851778596365!2d22.812340152750565!3d49.91310949435331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDU0JzQ3LjAiTiAyMsKwNDknMTAuNyJF!5e0!3m2!1spl!2spl!4v1510155836900"
				 width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row no-padding">

			<div class="form-title">
				<h3>Formularz kontaktowy</h3>
				<div class="aside-small-header">
					<h4>Formularz kontaktowy</h4>
					<hr>
				</div>
			</div>
		</div>

	</div>

	<div class="container">

		<form method="POST" action="http://agrotargiwschod.pl/mail.php">
			<div class="row no-padding">
				<div class="col-xs-12 col-sm-6">
					<input type="text" placeholder="Imię i nazwisko" name="name" />
				</div>
				<div class="col-xs-12 col-sm-6">
					<input type="email" placeholder="e-mail" name="email" />
				</div>
			</div>

			<div class="row no-padding">
				<div class="col-xs-12 col-sm-6">
					<input type="tel" placeholder="Numer telefonu" name="phone" />
				</div>
				<div class="col-xs-12 col-sm-6">
					<input type="text" placeholder="Temat wiadomości" name="title" />
				</div>
			</div>

			<div class="row no-padding">
				<div class="col-xs-12">
					<textarea placeholder="Treść wiadomości..." name="text"></textarea>
				</div>
			</div>

			<div class="row no-padding">
				<div class="button-box">
					<input class="send-button" type="submit" value="Wyślij" />
					<hr>
				</div>
			</div>
		</form>

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