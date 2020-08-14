@extends('partials.layout')

@section('content')

@include('partials.header')
<div class="site-blocks-cover" style="overflow: hidden;">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
				<img src="{{ asset('images/undraw_investing_7u74.svg') }}" alt="Image" class="img-fluid img-absolute">

				<div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
					<div class="col-lg-6 mr-auto">
						<h1>Llev&aacute; tu negocio al siguiente nivel!</h1>
						<p class="mb-5">Sac&aacute; provecho de los avances tecnol&oacute;gicos. Lo hacemos con vos.</p>
						<div>
							<a href="#features-section" class="btn btn-primary mr-2 mb-2">Conocer m&aacute;s</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="site-section" id="features-section">
	<div class="container">
		<div class="row mb-5 justify-content-center text-center" data-aos="fade-up">
			<div class="col-7 text-center  mb-5">
				<h2 class="section-title">Nuestras Soluciones</h2>
				<p class="lead">La experiencia a lo largo del tiempo nos ha permitido desarrollar soluciones de alta demanda.</p>
			</div>
		</div>
		<div class="row align-items-stretch">
			<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

				<div class="unit-4 d-block">
					<div class="unit-4-icon mb-3">
						<span class="icon-wrap"><span class="text-primary icon-calendar"></span></span>
					</div>
					<div>
						<h3>Turnos</h3>
						<p>Administraci&oacute;n de citas y servicios para el cliente, junto a tu resumen contable, todo en un mismo lugar.</p>
						<p><a href="#">Ver m&aacute;s</a></p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">

				<div class="unit-4 d-block">
					<div class="unit-4-icon mb-3">
						<span class="icon-wrap"><span class="text-primary icon-store_mall_directory"></span></span>
					</div>
					<div>
						<h3>Punto de Venta</h3>
						<p>Gesti&oacute;n de compras, ventas, clientes, caja, facturaci&oacute;n electr&oacute;nica, etc. La soluci&oacute;n para el comercio.</p>
						<p><a href="#">Ver m&aacute;s</a></p>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
				<div class="unit-4 d-block">
					<div class="unit-4-icon mb-3">
						<span class="icon-wrap"><span class="text-primary icon-shopping_basket"></span></span>
					</div>
					<div>
						<h3>Cat&aacute;logo</h3>
						<p>Venta sencilla por internet, sin la complejidad de un ecommerce, con las herramientas y flexibilidad justa.</p>
						<p><a href="#">Ver m&aacute;s</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="feature-big">
	<div class="container">
		<div class="row mb-5 site-section">
			<div class="col-lg-7" data-aos="fade-right">
				<img src="images/undraw_bookmarks_r6up.svg" alt="Image" class="img-fluid">
			</div>
			<div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
				<h2 class="text-black">Informaci&oacute;n centralizada</h2>

				<div class="author-box" data-aos="fade-right">
					<div class="d-flex mb-4">
						<div class="mr-3">
							<img src="images/25795363.png" alt="Image" class="img-fluid rounded-circle">
						</div>
						<div class="mr-auto text-black">
							<strong class="font-weight-bold mb-0">John Astete</strong> <br>
							Co-Founder, Proycer
						</div>
					</div>
					<blockquote>&ldquo;Cuando gestion&aacute;s tu negocio desde internet, toda la informaci&oacute;n est&aacute; accesible desde cualquier dispositivo.&rdquo;</blockquote>
				</div>
			</div>
		</div>

		<div class="mt-5 row mb-5 site-section ">
			<div class="col-lg-7 order-1 order-lg-2" data-aos="fade-right">
				<img src="images/undraw_metrics_gtu7.svg" alt="Image" class="img-fluid">
			</div>
			<div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
				<h2 class="text-black">Mejora en la toma de decisiones</h2>
				<div class="author-box" data-aos="fade-right">
					<div class="d-flex mb-4">
						<div class="mr-3">
							<img src="images/25795363.png" alt="Image" class="img-fluid rounded-circle">
						</div>
						<div class="mr-auto text-black">
							<strong class="font-weight-bold mb-0">John Astete</strong> <br>
							Co-Founder, Proycer
						</div>
					</div>
					<blockquote>&ldquo;El orden de la informaci&oacute;n facilita la toma de decisiones para el progreso.&rdquo;</blockquote>
				</div>
			</div>
		</div>

		{{-- <div class="site-section testimonial-wrap bg-light" id="testimonials-section">
				<div class="container">
					<div class="row mb-5">
						<div class="col-12 text-center">
							<h2 class="section-title mb-3">Clientes</h2>
						</div>
					</div>
				</div>
				<div class="slide-one-item home-slider owl-carousel">
					<div>
						<div class="testimonial">
							<figure class="mb-4 d-block align-items-center justify-content-center">
								<div><img src="images/person_5.jpg" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
							</figure>
							<blockquote class="mb-3">
								<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
									reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
									illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
							</blockquote>
							<p class="text-black"><strong>John Smith</strong></p>
						</div>
					</div>
					<div>
						<div class="testimonial">
							<figure class="mb-4 d-block align-items-center justify-content-center">
								<div><img src="images/person_6.jpg" alt="Image" class="w-100 img-fluid mb-3 shadow"></div>
							</figure>

							<blockquote class="mb-3">
								<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde
									reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae
									illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
							</blockquote>

							<p class="text-black"><strong>Robert Aguilar</strong></p>
						</div>
					</div>
				</div>
			</div> --}}
	</div>
</div>
@endsection
