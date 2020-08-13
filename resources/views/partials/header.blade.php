<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-md-3 col-xl-4  d-block">
                <h1 class="mb-0 site-logo"><a href="{{ route('home') }}" class="text-black h2 mb-0"><img src="images/proycer_logo_120p.png" /> </a></h1>
            </div>

            <div class="col-12 col-md-9 col-xl-8 main-menu">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
                        <li><a href="{{ route('home') }}" class="nav-link">Inicio</a></li>
                        <li class="has-children">
                            <a class="nav-link">Servicios</a>
                            <ul class="dropdown arrow-top">
                                <li><a href="{{ route('schedule') }}" class="nav-link">Gesti&oacute;n de Turnos</a></li>
                                <li><a href="{{ route('list') }}" class="nav-link">Cat&aacute;logo Online</a></li>
                                <li><a href="#" class="nav-link">Punto de Venta</a></li>
                                {{-- <li class="has-children">
                                    <a href="#">More Links</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </li>
                        <li><a href="{{ route('us') }}" class="nav-link">Nosotros</a></li>
                        <li><a href="https://crm.proycer.com.ar" class="nav-link">Autogesti&oacute;n</a></li>
                    </ul>
                </nav>
            </div>


            <div class="col-6 col-md-9 d-inline-block d-lg-none ml-md-0">
                <a href="#" class="site-menu-toggle js-menu-toggle text-black float-right">
                    <span class="icon-menu h3"></span>
                </a>
            </div>

        </div>
    </div>

</header>
