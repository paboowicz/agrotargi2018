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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.11.1/simple-lightbox.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.11.1/simplelightbox.css">

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
				<li>
					<a href="{{ url('/dla-zwiedzajacych') }}">dla zwiedzających</a>
				</li>
				<li>
					<a href="{{ url('/galeria') }}">Galeria</a>
				</li>
				<li class="active">
					<a href="{{ url()->current() }}">I Agro Targi Wschód 2017</a>
				</li>
			</ul>
			<h1>I Agro Targi Wschód 2017</h1>
		</div>
	</div>
	<div class="container gallery">
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/a.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/a.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/b.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/b.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/c.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/c.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/d.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/d.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/e.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/e.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/f.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/f.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/g.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/g.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/h.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/h.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/i.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/i.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/j.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/j.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/k.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/k.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/l.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/l.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/m.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/m.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/n.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/n.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/o.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/o.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/p.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/p.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/r.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/r.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/s.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/s.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/t.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/t.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/u.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/u.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/w.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/w.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/y.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/y.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/z.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/z.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/z1.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/z1.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/z2.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/z2.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/z3.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/z3.jpg" alt="">
				</a>
			</div>
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/z4.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/z4.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12-col-sm-6 col-md-4">
				<a href="{{ url('/') }}/src/assets/img/gal1/z5.jpg">
					<img class="Thumbnail" src="{{ url('/') }}/src/assets/img/gal1/z5.jpg" alt="">
				</a>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="galleryNav">
				<a class="prev" href="#">poprzedni wpis</a>
				<a class="next" href="#">następny wpis</a>
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
					<img class="icon" src="{{ url('/') }}/src/assets/img/OTARGACH.png" alt="o targach">
					<h4>O targach</h4>
					<p>Agro Targi Wschód to kompleksowa wystawa, podczas której swoją aktualną ofertę prezentują producenci maszyn rolniczych,
						producenci nawozów, nasion, środków ochrony roślin, firmy z sektora finansowego i innych branż związanych z rolnictwem.</p>
					<a href="{{ url('/o-targach') }}" class="">czytaj</a>
				</div>
			</div>
			<div class="col-xs-12 col-md-4">
				<div class="info-banner">
					<img class="icon" src="{{ url('/') }}/src/assets/img/IDEA.png" alt="o targach">
					<h4>Idea targów</h4>
					<p>Międzynarodowy charakter i transgraniczność targów, bezpośrednie sąsiedztwo z Ukrainą oraz liberalizacja wymiany handlowej
						między Ukrainą i Unią Europejską są impulsem do podjęcia na tym obszarze imprez targowo-wystawienniczych.</p>
					<a href="{{ url('/idea') }}" class="">zobacz</a>
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