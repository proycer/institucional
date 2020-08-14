<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="robots" content="all,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Cat&aacute;logo Online</title>

	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/services.css') }}">
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

	<!-- Tweaks for older IEs-->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container"><a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" width="100%"></a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link link-scroll" href="#hero">Inicio</a></li>
						<li class="nav-item"><a class="nav-link link-scroll" href="#about">Planes</a></li>
						<li class="nav-item"><a class="nav-link link-scroll" href="#services">Funciones</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<section class="hero bg-top" id="hero"
		style="background: url({{ asset('img/banner-4.png') }}) no-repeat; background-size: 100% 80%">
		<div class="container">
			<div class="row py-5 px-2">
				<div class="col-lg-7 col-md-5 py-5" data-aos="fade-up">
					<h1 class="font-weight-bold">Vend&eacute; f&aacute;cil en Internet</h1>
					<h3 class="">por $399/mes</h3>
					<p class="my-4 text-muted">Olvidate de la complejidad de una tienda online.<br />Us&aacute; tu
						propio cat&aacute;logo.</p>
					<ul class="list-inline mb-0">
						<li class="list-inline-item mb-2 mb-lg-0"><a class="btn btn-primary btn-lg px-4" href="#">
								Prob&aacute; una demo</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-5 col-md-4 ml-auto" data-aos="fade-up">
					<div class="device-wrapper mx-auto">
						<div class="device shadow" data-device="iPhoneX" data-orientation="portrait" data-color="black">
							<div class="screen"><img class="img-fluid" src="{{ asset('img/mobile.jpg') }}" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-center py-0" id="about" style="background: url({{ asset('img/service-bg.svg') }}) no-repeat; background-size: cover">
		<section class="about py-0">
			<div class="container">
				<p class="h6 text-uppercase text-primary">Planes</p>
				<h2 class="mb-5">Avanza a tu ritmo</h2>
				<div class="row pb-5">
					<div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
						<div class="card border-0 shadow rounded-lg py-4 text-left">
							<div class="card-body p-5">
								<div class="text-center">
									<img src="{{ asset('img/small-business.png') }}" />
								</div>
								<h3 class="font-weight-normal text-center h4">Cat&aacute;logo Online</h3>
								<h3 class="font-weight-light h5 text-right">$399/mes</h3>
								<p class="text-small mb-0 mt-4">Tu sitio web promocionando tus productos y una
									gesti&oacute;n
									sencilla con las funciones esenciales.</p>
								<p class="text-small mb-0 mt-2">Sin comisiones ni cargos ocultos.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
						<div class="card border-0 shadow rounded-lg py-4 text-left">
							<div class="card-body p-5">
								<h3 class="font-weight-light h5 text-center">La mejor opci&oacute;n!</h3>
								<p class="text-small mb-0 mt-4">Esto es lo que vas a tener:
								<ul class="text-small">
									<li>P&aacute;gina personalizada</li>
									<li>Lista para vender</li>
									<li>Botones de redes sociales</li>
									<li>Visible en pc y celular</li>
									<li>Administraci&oacute;n sencilla</li>
									<li>Y m&aacute;s ..</li>
								</ul>
								</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
						<div class="card border-0 shadow rounded-lg py-4 text-left">
							<div class="card-body p-5">
								<div class="text-center">
									<img src="{{ asset('img/flex-biceps.png') }}" />
								</div>
								<h3 class="font-weight-normal text-center h4">Ayuda extra!</h3>
								<p class="text-small mb-0 mt-4">Si ten&eacute;s muchos productos para cargar o
									necesit&aacute;s ayuda con las redes sociales tenemos disponible especialistas para
									hacerlo por vos!.</p>
								<p class="text-small text-center mb-0 mt-2">$599 por &uacute;nica vez!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="with-pattern-1" id="services">
			<div class="container">
				<div class="row align-items-center mb-5">
					<div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
						<img class="img-fluid w-100 px-lg-5" src="{{ asset('img/objects.svg') }}" alt="">
					</div>
					<div class="col-lg-6" data-aos="fade-right">
						<h2>No tiene que ser dif&iacute;cil</h2>
						<p class="text-muted">Tu emprendimiento no necesita complic&aacute;rsela m&aacute;s. Nosotros te
							ayudamos a estar en internet, vos cerr&aacute;s las ventas.</p>
						<button class="btn btn-primary js-modal-btn" data-video-id="B6uuIHpFkuo">
							Solicitar ya!
						</button>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
						<h2>Ojo!</h2>
						<p class="text-muted">Eso no significa que no te vamos a dar todas las herramientas que
							necesitas para vender. Tenemos lo necesario para ayudarte con:</p>
						<ul class="list-check">
							<li class="text-muted mb-2">La publicaci&oacute;n de tus productos</li>
							<li class="text-muted mb-2">Compartir en las redes sociales</li>
							<li class="text-muted mb-2">Una gesti&oacute;n f&aacute;cil pensada en vos</li>
						</ul>
						<button class="btn btn-primary js-modal-btn" data-video-id="B6uuIHpFkuo">
							Solicitar ya!
						</button>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-sm-6 mb-4" data-aos="fade-right">
								<div class="card border-0 shadow rounded-lg text-left px-2">
									<div class="card-body px py-5">
										<img src="{{ asset('img/rgb-circle-1--v1.png') }}" />
										<h3 class="h5 font-weight-normal h4 my-3">Tu estilo</h3>
										<p class="text-small mb-0 text-muted">Apariencia, opciones y banner a tu gusto.
										</p>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6 mb-4" data-aos="fade-right">
								<div class="card border-0 shadow rounded-lg text-left px-2">
									<div class="card-body px py-5">
										<img src="{{ asset('img/facebook-messenger.png') }}" />
										<h3 class="h5 font-weight-normal h4 my-3">Redes Sociales</h3>
										<p class="text-small mb-0 text-muted">Recibe mensajes directamente por Messenger
											o WhatsApp.</p>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6 mb-4" data-aos="fade-right">
								<div class="card border-0 shadow rounded-lg text-left px-2">
									<div class="card-body px py-5">
										<img src="{{ asset('img/web-design.png') }}" />
										<h3 class="h5 font-weight-normal h4 my-3">Marca</h3>
										<p class="text-small mb-0 text-muted">Tu propio sitio web .com.ar en internet.
										</p>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-6" data-aos="fade-right">
								<div class="card border-0 shadow rounded-lg text-left px-2">
									<div class="card-body px py-5">
										<img src="{{ asset('img/maintenance.png') }}" />
										<h3 class="h5 font-weight-normal h4 my-3">Gesti&oacute;n</h3>
										<p class="text-small mb-0 text-muted">Pod&eacute;s autoadministrar tu
											cat&aacute;logo</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

	<a href="https://api.whatsapp.com/send?phone=+5492996743360" class="float-wp" target="_blank">
		<img class="my-float-wp" src="{{ asset('img/whatsapp.png') }}" />
	</a>

	<style>
		.float-wp {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 18pt;
			right: 18pt;
			background-color: #40c351;
			color: #FFF;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 2px 2px 3px #999;
			z-index: 9999;
		}

		.my-float-wp {
			margin-top: 9px;
			margin-left: 1px;
		}
	</style>

	<footer class="with-pattern-1 position-relative">
		<div class="container section-padding-y">
			<div class="row">
				<div class="col-lg-3 mb-4 mb-lg-0"><img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" width="110">
					<p class="text-muted">Empoderamos a los emprendedores con tecnolog&iacute;a.</p>
				</div>

				<div class="col-lg-2 offset-lg-1 mb-4 mb-lg-0">
					<h2 class="h5 mb-4">Enlaces</h2>
					<div class="d-flex">
						<ul class="list-unstyled mr-4 mb-0">
							<li class="mb-2"><a class="footer-link" href="#hero">Inicio</a></li>
							<li class="mb-2"><a class="footer-link" href="#about">Planes</a></li>
							<li class="mb-2"><a class="footer-link" href="#services">Funciones</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-5 offset-lg-1">
					<h2 class="h5 mb-4">Info de Contacto</h2>
					<ul class="list-unstyled mr-4 mb-3">
						<li class="mb-2 text-muted">Argentina</li>
						<li class="mb-2"><a class="footer-link" href="tel:619-851-4132">+549 299 674 7311</a></li>
						<li class="mb-2"><a class="footer-link" href="mailto:Nova@example.com">hola@proycer.com.ar</a>
						</li>
					</ul>
					<ul class="list-inline mb-0">
						<li class="list-inline-item">
							<a class="social-link" target="_blank" href="https://facebook.com/proycer.com.ar">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a class="social-link" target="_blank" href="https://m.me/proycer.com.ar">
								<i class="fab fa-facebook-messenger"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a class="social-link" target="_blank"
								href="https://api.whatsapp.com/send?phone=+5492996743360">
								<i class="fab fa-whatsapp"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{ asset('js/services.js') }}"></script>
	<script>
		$(function () {
			$(window).on('scroll load', function () {
				if ($(window).scrollTop() > 5) {
					$('.navbar').addClass('active');
				} else {
					$('.navbar').removeClass('active');
				}
			});
		});
	</script>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>
