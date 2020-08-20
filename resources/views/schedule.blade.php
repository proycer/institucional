@extends('services.layout')

@section('content')
<section class="hero bg-top" id="hero" style="background: url({{ asset('img/banner-4.png') }}) no-repeat; background-size: 100% 80%">
	<div class="container">
		<div class="row py-5 px-2">
			<div class="col-lg-7 col-md-5 py-5" data-aos="fade-up">
				<h1 class="font-weight-bold">Turnos, Reservas &amp; Gesti&oacute;n</h1>
				<h3 class="">a s&oacute;lo AR$399 /mes</h3>
				<p class="my-4 text-muted">Un sistema de gesti&oacute;n sencillo para trabajadores de la belleza.</p>
				<ul class="list-inline mb-0">
					<li class="list-inline-item mb-2 mb-lg-0"><a class="btn btn-primary btn-lg px-4" href="#">
							Prob&aacute; una demo</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-5 col-md-4 ml-auto" data-aos="fade-up">
				<div class="preview owl-carousel owl-theme">
					<div class="device-wrapper mx-auto">
						<img class="img-fluid" src="{{ asset('images/turnos-1.png') }}" alt="">
					</div>
					<div class="device-wrapper mx-auto">
						<img class="img-fluid" src="{{ asset('images/turnos-2.png') }}" alt="">
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
								<img src="{{ asset('img/calendar.png') }}" />
							</div>
							<h3 class="font-weight-normal text-center h4">Turnos Online</h3>
							<h3 class="font-weight-light h5 text-right">AR$399 /mes</h3>
							<p class="text-small mb-0 mt-4">La herramienta que necesit&aacute;s para llevar tu negocio de manera ordenada, segura y hacia más clientes. Si necesit&aacute;s gestionar a varios profesionales, tambi&eacute;n tenemos esa modalidad.</p>
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
									<li>Lista para usar</li>
									<li>Botones de redes sociales</li>
									<li>Visible en pc, tablet y celular</li>
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
							<p class="text-small mb-0 mt-4">Si necesit&aacute;s ayuda con las redes sociales tenemos disponible especialistas para hacerlo por vos!.</p>
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
						facilitamos la herramienta, vos hac&eacute;s tu negocio.</p>
					<a href="https://api.whatsapp.com/send?phone=+5492996743360" class="btn btn-lg btn-primary">
						Solicitar ya!
					</a>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
					<h2>Ojo!</h2>
					<p class="text-muted">Eso no significa que no te vamos a dar todas las herramientas que
						necesitas para trabajar. Tenemos lo necesario para ayudarte con:</p>
					<ul class="list-check">
						<li class="text-muted mb-2">La carga de tus servicios</li>
						<li class="text-muted mb-2">Compartir en las redes sociales</li>
						<li class="text-muted mb-2">Una gesti&oacute;n f&aacute;cil pensada en vos</li>
					</ul>
					<a href="https://api.whatsapp.com/send?phone=+5492996743360" class="btn btn-lg btn-primary">
						Solicitar ya!
					</a>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-6 col-sm-6 mb-4" data-aos="fade-right">
							<div class="card border-0 shadow rounded-lg text-left px-2">
								<div class="card-body px py-5">
									<img src="{{ asset('img/wallet.png') }}" />
									<h3 class="h5 font-weight-normal h4 my-3">Control</h3>
									<p class="text-small mb-0 text-muted">Mayor conocimiento de tus ganancias.
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6 mb-4" data-aos="fade-right">
							<div class="card border-0 shadow rounded-lg text-left px-2">
								<div class="card-body px py-5">
									<img src="{{ asset('img/gmail.png') }}" />
									<h3 class="h5 font-weight-normal h4 my-3">Notificaciones</h3>
									<p class="text-small mb-0 text-muted">Recibe mensajes directamente en tu email.</p>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6 mb-4" data-aos="fade-right">
							<div class="card border-0 shadow rounded-lg text-left px-2">
								<div class="card-body px py-5">
									<img src="{{ asset('img/web-design.png') }}" />
									<h3 class="h5 font-weight-normal h4 my-3">Marca</h3>
									<p class="text-small mb-0 text-muted">Tu propio sitio web en internet.
									</p>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6" data-aos="fade-right">
							<div class="card border-0 shadow rounded-lg text-left px-2">
								<div class="card-body px py-5">
									<img src="{{ asset('img/maintenance.png') }}" />
									<h3 class="h5 font-weight-normal h4 my-3">Gesti&oacute;n</h3>
									<p class="text-small mb-0 text-muted">Pod&eacute;s autoadministrar tus
										servicios</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
@endsection
