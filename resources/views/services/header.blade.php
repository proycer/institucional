<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" width="100%"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link link-scroll" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('schedule') }}">Gesti&oacute;n de Turnos</a>
                            <a class="dropdown-item" href="{{ route('list') }}">Cat&aacute;logo Online</a>
                            <a class="dropdown-item" href="#">Punto de Venta</a>
                        </div>
                    </li>
                    {{-- <li class="nav-item"><a class="nav-link link-scroll" href="{{ route('us') }}">Nosotros</a></li> --}}
                    <li class="nav-item"><a class="nav-link link-scroll" href="https://crm.proycer.com.ar">Autogesti&oacute;n</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
