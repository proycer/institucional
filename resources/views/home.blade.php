@extends('services.layout')

@push('pre-style')
<link rel="stylesheet" href="{{ asset('css/home_critical.min.css') }}">
@endpush

@section('content')
<section class="hero bg-top" id="hero" style="background: url({{ asset('img/banner-4.png') }}) no-repeat; background-size: 100% 80%">
    <div class="container">
        <div class="row py-5 px-2">
            <div class="col-lg-7 col-md-5 py-5" data-aos="fade-up">
                <h1 class="font-weight-bold">Llev&aacute; tu negocio al siguiente nivel!</h1>
                <p class="my-4 text-muted">Sac&aacute; provecho de los avances tecnol&oacute;gicos. Lo hacemos con vos.</p>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mb-2 mb-lg-0">
                        <a class="btn btn-primary btn-lg px-4" href="#about">Conocer m&aacute;s</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-4 ml-auto" data-aos="fade-up">
                <img class="img-fluid" src="{{ asset('images/undraw_investing_7u74.svg') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section class="bg-center py-0" id="about" style="background: url({{ asset('img/service-bg.svg') }}) no-repeat; background-size: cover">
    <section class="about py-0">
        <div class="container">
            <p class="h6 text-uppercase text-primary">Nuestras Soluciones</p>
            <h2 class="mb-5">Desarrollamos propuestas de alta demanda.</h2>
            <div class="row pb-5">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up">
                    <div class="card border-0 shadow rounded-lg py-4 text-left">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <img src="{{ asset('img/calendar.png') }}" />
                            </div>
                            <h3 class="font-weight-normal text-center h4"><a href="{{ route('schedule') }}">Turnos Online</a></h3>
                            <h3 class="font-weight-light h5 text-right">{{-- AR$399 /mes --}}</h3>
                            <p class="text-small mb-0 mt-4">Manej&aacute;s tus turnos por las redes sociales y respond&eacute;s mensajes todo el tiempo? Organizalo con tu calendario web!</p>
                            <div class="text-center">
								<a href="{{ route('schedule') }}" class="btn btn-lg btn-primary">
									Ver m&aacute;s
								</a>
							</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow rounded-lg py-4 text-left">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <img src="{{ asset('img/small-business.png') }}" />
                            </div>
                            <h3 class="font-weight-normal text-center h4"><a href="{{ route('list') }}">Cat&aacute;logo Online</a></h3>
                            <h3 class="font-weight-light h5 text-right">{{-- AR$799 /mes --}}</h3>
                            <p class="text-small mb-0 mt-4">Vend&eacute;s por WhatsApp, necesit&aacute;s ordenar tus ventas y dejar de enviar precios? Que tu cat&aacute;logo venda por vos!</p>
                            <div class="text-center">
								<a href="{{ route('list') }}" class="btn btn-lg btn-primary">
									Ver m&aacute;s
								</a>
							</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow rounded-lg py-4 text-left">
                        <div class="card-body p-5">
                            <div class="text-center">
                                <img src="{{ asset('img/cash-register.png') }}" />
                            </div>
                            <h3 class="font-weight-normal text-center h4">Caja Online</h3>
                            <h3 class="font-weight-light h5 text-right">pr&oacute;ximamente!</h3>
                            <p class="text-small mb-0 mt-4">Tu punto de venta donde administras compras, ventas, stock y dem&aacute;s de tu negocio.</p>
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
                    <img class="img-fluid w-100 px-lg-5" src="{{ asset('images/undraw_bookmarks_r6up.svg') }}" alt="">
                </div>
                <div class="col-lg-6" data-aos="fade-right">
                    <h2>Informaci&oacute;n centralizada</h2>
                    <p class="text-muted">&ldquo;Cuando gestion&aacute;s tu negocio desde internet, toda la informaci&oacute;n est&aacute; accesible desde cualquier dispositivo.&rdquo;</p>
                    <a href="#about" class="btn btn-lg btn-primary">
                        Saber m&aacute;s!
                    </a>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2>Mejora en la toma de decisiones</h2>
                    <p class="text-muted">&ldquo;El orden de la informaci&oacute;n facilita la toma de decisiones para el progreso.&rdquo;</p>
                    <a href="#about" class="btn btn-lg btn-primary">
                        Saber m&aacute;s!
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <img class="img-fluid w-100 px-lg-5" src="{{ asset('images/undraw_metrics_gtu7.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
