@extends('services.layout')

@push('pre-style')
<style type="text/css">
@charset "UTF-8";@font-face{font-family:Nunito;font-style:normal;font-weight:300;src:local('Nunito Light'),local('Nunito-Light'),url(https://fonts.gstatic.com/s/nunito/v14/XRXW3I6Li01BKofAnsSUYevN.ttf) format('truetype')}@font-face{font-family:Nunito;font-style:normal;font-weight:400;src:local('Nunito Regular'),local('Nunito-Regular'),url(https://fonts.gstatic.com/s/nunito/v14/XRXV3I6Li01BKofINeaE.ttf) format('truetype')}@font-face{font-family:Nunito;font-style:normal;font-weight:700;src:local('Nunito Bold'),local('Nunito-Bold'),url(https://fonts.gstatic.com/s/nunito/v14/XRXW3I6Li01BKofAjsOUYevN.ttf) format('truetype')}:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,:after,:before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%}header,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h1,h2,h3{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}ul{margin-bottom:1rem}ul{margin-top:0}a{color:#007bff;text-decoration:none;background-color:transparent}img{border-style:none}img{vertical-align:middle}button{border-radius:0}button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button{overflow:visible}button{text-transform:none}[type=button],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}.h6,h1,h2,h3{margin-bottom:.5rem;font-weight:500;line-height:1.2}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.75rem}.h6{font-size:1rem}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.img-fluid{max-width:100%;height:auto}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-lg-5,.col-lg-7,.col-md-4,.col-md-5{position:relative;width:100%;padding-right:15px;padding-left:15px}@media (min-width:768px){.col-md-4{flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{flex:0 0 41.666667%;max-width:41.666667%}}@media (min-width:992px){.col-lg-5{flex:0 0 41.666667%;max-width:41.666667%}.col-lg-7{flex:0 0 58.333333%;max-width:58.333333%}}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem}.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn-lg{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.collapse:not(.show){display:none}.nav-link{display:block;padding:.5rem 1rem}.navbar{position:relative;padding:.5rem 1rem}.navbar,.navbar .container{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}@media (max-width:991.98px){.navbar-expand-lg>.container{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-lg .navbar-nav{flex-direction:row}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container{flex-wrap:nowrap}.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}.fixed-top{top:0}.fixed-top{position:fixed;right:0;left:0;z-index:1030}.mb-0{margin-bottom:0!important}.mb-2{margin-bottom:.5rem!important}.my-4{margin-top:1.5rem!important}.my-4{margin-bottom:1.5rem!important}.mb-5{margin-bottom:3rem!important}.py-0{padding-top:0!important}.py-0{padding-bottom:0!important}.px-2{padding-right:.5rem!important}.px-2{padding-left:.5rem!important}.px-3{padding-right:1rem!important}.px-3{padding-left:1rem!important}.px-4{padding-right:1.5rem!important}.px-4{padding-left:1.5rem!important}.py-5{padding-top:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}.mx-auto{margin-right:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:992px){.mb-lg-0{margin-bottom:0!important}}.text-uppercase{text-transform:uppercase!important}.font-weight-bold{font-weight:700!important}.text-primary{color:#007bff!important}.text-muted{color:#6c757d!important}.owl-carousel{position:relative}.owl-carousel{display:none;width:100%;z-index:1}[data-aos^=fade][data-aos^=fade]{opacity:0}[data-aos=fade-up]{transform:translate3d(0,100px,0)}:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,:after,:before{box-sizing:border-box}html{font-family:Nunito,Noto Color Emoji;line-height:1.15;-webkit-text-size-adjust:100%}header,nav,section{display:block}body{margin:0;font-family:Nunito,Noto Color Emoji;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}h1,h2,h3{margin-top:0;margin-bottom:.5rem}p,ul{margin-top:0;margin-bottom:1rem}a{color:#007bff;background-color:transparent}img{vertical-align:middle;border-style:none}button{border-radius:0}button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;overflow:visible;text-transform:none}[type=button],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}.h6,h1,h2,h3{font-weight:500}h1{font-size:3.5rem}h2{font-size:2rem}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.img-fluid{max-width:100%;height:auto}.container{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container{max-width:540px}}@media (min-width:768px){.container{max-width:720px}}@media (min-width:992px){.container{max-width:960px}}@media (min-width:1200px){.container{max-width:1140px}}.row{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.col-lg-5{position:relative;width:100%;padding-right:15px;padding-left:15px}@media (min-width:992px){.col-lg-5{flex:0 0 41.666667%;max-width:41.666667%}}.collapse:not(.show){display:none}.navbar{position:relative}.navbar,.navbar>.container{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.navbar-brand{line-height:inherit;white-space:nowrap}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{background-color:transparent}@media (max-width:991.98px){.navbar-expand-lg>.container{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-lg .navbar-nav{flex-direction:row}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container{flex-wrap:nowrap}.navbar-expand-lg .navbar-collapse{display:flex!important;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.mb-0{margin-bottom:0!important}.mb-2{margin-bottom:.5rem!important}.my-4{margin-top:1.5rem!important}.my-4{margin-bottom:1.5rem!important}.mb-5{margin-bottom:3rem!important}.py-0{padding-top:0!important;padding-bottom:0!important}.px-2{padding-right:.5rem!important;padding-left:.5rem!important}.px-4{padding-right:1.5rem!important}.px-4{padding-left:1.5rem!important}.py-5{padding-top:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}.mx-auto{margin-right:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:992px){.mb-lg-0{margin-bottom:0!important}}.text-uppercase{text-transform:uppercase!important}.font-weight-bold{font-weight:700!important}.text-primary{color:#007bff!important}.text-muted{color:#6c757d!important}.device-wrapper{max-width:300px;width:100%}.text-uppercase{text-transform:uppercase;letter-spacing:.1em}.text-muted{color:#777!important}.bg-center{background-position:50%!important}.bg-top{background-position:top!important}.font-weight-bold{font-weight:800!important}section{position:relative;padding:6.5rem 0}.navbar{padding-top:1.5rem!important;padding-bottom:1.5rem!important}@media (max-width:991.98px){.navbar{background:#fff;padding-top:1rem!important;padding-bottom:1rem!important;box-shadow:0 1px 5px rgba(0,0,0,.1)}}.navbar-toggler{color:#17141f}.device-wrapper{z-index:999;position:relative}.navbar{padding:.5rem 1rem}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1}.btn,.navbar-toggler{border:1px solid transparent;border-radius:.25rem}.btn{font-weight:400;padding:.4rem 1.5rem;font-size:1rem;line-height:1.5}.btn-primary{color:#fff;background-color:#f1925d;border-color:#f1925d}.btn-lg{padding:.5rem 1rem;font-size:16px;line-height:1.5;border-radius:30px}a{color:#f1925d;text-decoration:none}.h6,h1,h2,h3{margin-bottom:.5rem;font-family:inherit;font-weight:600;line-height:1.2;color:inherit}h2{font-size:2.4rem}h3{font-size:1.75rem}.h6{font-size:1rem}.text-primary{color:#f1925d!important}.nav-link{display:block;padding:.5rem 1rem;font-weight:400;color:#17141f}.navbar-expand-lg .navbar-nav .nav-link{padding-left:1rem;padding-right:1.5rem}.float-wp{position:fixed;width:60px;height:60px;bottom:13pt;right:13pt;background-color:#40c351;color:#fff;border-radius:50px;text-align:center;font-size:30px;box-shadow:2px 2px 3px #999;z-index:9999}.my-float-wp{margin-top:11px;margin-left:1px}.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-bars:before{content:"\f0c9"}@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:400;font-display:auto;src:url(../../../Users/johne/AppData/Local/webfonts/fa-regular-400.eot);src:url(../../../Users/johne/AppData/Local/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(../../../Users/johne/AppData/Local/webfonts/fa-regular-400.woff2) format("woff2"),url(../../../Users/johne/AppData/Local/webfonts/fa-regular-400.woff) format("woff"),url(../../../Users/johne/AppData/Local/webfonts/fa-regular-400.ttf) format("truetype"),url(../../../Users/johne/AppData/Local/webfonts/fa-regular-400.svg#fontawesome) format("svg")}@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:900;font-display:auto;src:url(../../../Users/johne/AppData/Local/webfonts/fa-solid-900.eot);src:url(../../../Users/johne/AppData/Local/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url(../../../Users/johne/AppData/Local/webfonts/fa-solid-900.woff2) format("woff2"),url(../../../Users/johne/AppData/Local/webfonts/fa-solid-900.woff) format("woff"),url(../../../Users/johne/AppData/Local/webfonts/fa-solid-900.ttf) format("truetype"),url(../../../Users/johne/AppData/Local/webfonts/fa-solid-900.svg#fontawesome) format("svg")}.fas{font-family:"Font Awesome 5 Free"}.fas{font-weight:900}
</style>
@endpush

@section('content')
<section class="hero bg-top" id="hero" style="background: url({{ asset('img/banner-4.png') }}) no-repeat; background-size: 100% 80%">
	<div class="container">
		<div class="row py-5 px-2">
			<div class="col-lg-7 col-md-5 py-5" data-aos="fade-up">
				<h1 class="font-weight-bold">Gesti&oacute;n de Turnos Online</h1>
				<h3 class="">desde AR$399 /mes</h3>
				<p class="my-4 text-muted" style="font-size: 18px;">Un sistema de turnos online sencillo para llevar control de tu negocio.</p>
				<ul class="list-inline mb-0">
					<li class="list-inline-item mb-2 mb-lg-0">
						<a class="btn btn-primary btn-lg px-4" href="https://turnos.proycer.com.ar/login?email=admin@demo.com&pass=admindemo" target="_blank">
							Probalo gratis
						</a>
					</li>
					<li class="list-inline-item mb-2 mb-lg-0" style="font-size: 14px;">
					(no necesit&aacute;s registrarte)
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
			<h2 class="mb-5">Avanz&aacute; a tu ritmo</h2>
			<div class="row pb-5">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
					<div class="card border-0 shadow rounded-lg py-4 text-left">
						<div class="card-body p-5">
							<div class="text-center">
								<img src="{{ asset('img/calendar.png') }}" />
							</div>
							<h3 class="font-weight-normal text-center h4">Turnero Online</h3>
							<h3 class="font-weight-light h5 text-right">AR$399 /mes</h3>
							<p class="text-small mb-0 mt-4">Manej&aacute;s tus turnos por las redes sociales y respond&eacute;s mensajes todo el tiempo? Organizalo con tu calendario web!</p>
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
									<li>Opciones personalizables</li>
									<li>Env&iacute;o de notificaciones</li>
									<li>Panel con resumen de ganancias</li>
									<li>Visible en pc, tablet y celular</li>
									<li>Administraci&oacute;n sencilla</li>
									<li>Y m&aacute;s ..</li>
								</ul>
							</p>
							<div class="text-center">
								<a href="https://api.whatsapp.com/send?phone=+5492996743360" class="btn btn-lg btn-primary">
									Solicitar ya!
								</a>
							</div>
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
							<p class="text-small mb-0 mt-4">Si necesit&aacute;s gestionar tu local con varios profesionales, pod&eacute;s administrar a cada trabajador con sus ganancias, calendario y usuario!.</p>
							<p class="text-small text-center mb-0 mt-2">AR$199 por cada profesional adicional!</p>
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
