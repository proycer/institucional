@extends('services.layout')

@section('content')
<section class="hero bg-top" id="hero" style="background: url({{ asset('img/banner-4.png') }}) no-repeat; background-size: 100% 80%">
	<div class="container">
		<div class="row py-5 px-2">
			<div class="col-lg-6 col-md-6 py-5" data-aos="fade-up">
                <h2 class="font-weight-bold text-center">Venta de Verduras</h2>
                <img class="img-fluid" src="{{ asset('images/verduras.jpg') }}" alt="">
				<ul class="list-inline mb-0 text-center">
					<li class="list-inline-item mt-5 mb-2 mb-lg-0">
						<a class="btn btn-primary btn-lg px-4" target="_blank" href="https://catalogo.proycer.com.ar">
							Probalo gratis
						</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-6 py-5" data-aos="fade-up">
                <h2 class="font-weight-bold text-center">Venta de Ropa/Calzado</h2>
                <img class="img-fluid" src="{{ asset('images/moda.jpg') }}" alt="">
				<ul class="list-inline mb-0 text-center">
					<li class="list-inline-item mt-5 mb-2 mb-lg-0">
						<a class="btn btn-primary btn-lg px-4" target="_blank" href="https://moda.proycer.com.ar">
							Probalo gratis
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
@endsection
