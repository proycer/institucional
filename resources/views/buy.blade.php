@extends('services.layout')

@section('content')
<section class="hero bg-top" id="hero" style="background: url({{ asset('img/banner-4.png') }}) no-repeat; background-size: 100% 80%">
	<div class="container">
		<div class="row py-5 px-2">
			<div class="col-md-5 col-sm-12 py-5" data-aos="fade-up">
				<h1 class="font-weight-bold">Comenz&aacute; ahora!</h1>
				<h3 class="">desde AR$199 /mes</h3>
				<p class="my-4 text-muted" style="font-size: 18px;">Complet&aacute; algunos datos y realiz&aacute; el pago para empezar a usar tu calendario! Si todav&iacute;a no est&aacute;s seguro/a, prob&aacute; la versi&oacute;n gratuita o toc&aacute; el &iacute;cono de WhatsApp.</p>
				<ul class="list-inline mb-0">
					<li class="list-inline-item mb-2 mb-lg-0">
						<a class="btn btn-primary btn-lg px-4" href="https://turnos.proycer.com.ar/login?email=admin@demo.com&pass=admindemo" target="_blank">
							Probar demo
						</a>
					</li>
					<li class="list-inline-item mb-2 mb-lg-0" style="font-size: 14px;">
						(no necesit&aacute;s registrarte)
					</li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-12 py-5 ml-auto" data-aos="fade-up">
				<h3 class="">Registrate</h3>
				<form class="form">
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<input type="text" class="form-control" placeholder="Nombre y Apellido">
						</div>
						<div class="form-group col-md-6 col-sm-12">
							<input type="text" class="form-control" placeholder="Nombre de tu Negocio">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<input type="text" class="form-control" placeholder="DNI/CUIT">
						</div>
						<div class="form-group col-md-6 col-sm-12">
							<input type="email" class="form-control" placeholder="Correo Electr&oacute;nico">
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Direcci&oacute;n">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<input type="password" class="form-control" placeholder="Contrase&ntilde;a">
						</div>
						<div class="form-group col-md-6 col-sm-12">
							<input type="password" class="form-control" placeholder="Repet&iacute; la contrase&ntilde;a">
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" id="gridCheck">
							<label class="form-check-label" for="gridCheck">
								Acepto los <a href="#">t&eacute;rminos y condiciones</a>
							</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Registrarme</button>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
