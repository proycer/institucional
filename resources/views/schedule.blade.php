@extends('partials.layout')

@section('content')
<div class="site-wrap" id="home-section">
    @include('partials.header')
    <div class="site-blocks-cover" style="overflow: hidden;">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
					<img src="{{ asset('images/turnos.png') }}" alt="Image" style="height: 25rem;" class="img-fluid img-absolute">

					<div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
						<div class="col-lg-6 mr-auto">
							<h1>Turnos, reservas y gesti&oacute;n</h1>
							<p class="mb-5">Un sistema de gesti&oacute;n sencillo para trabajadores de la belleza.</p>
							<div>
								<a href="#features-section" class="btn btn-primary mr-2 mb-2">Probar demo</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
