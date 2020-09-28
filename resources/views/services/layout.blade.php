<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="robots" content="all,follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ $title }} | Proycer</title>
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

	<!-- Tweaks for older IEs-->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	@stack('pre-style')
</head>

<body>
	@include('services.header')
	@yield('content')
	@include('services.footer')
</body>

<a href="https://api.whatsapp.com/send?phone=+5492996743360" class="float-wp" id="whatsapp" target="_blank">
	<img class="my-float-wp" src="{{ asset('img/whatsapp.png') }}" />
</a>

<link rel="preload" href="{{ asset('css/services.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ asset('css/services.css') }}"></noscript>

<link rel="preload" href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,700"></noscript>

<script src="{{ asset('js/services.js') }}"></script>
<script>
	$(function() {
		$(window).on('scroll load', function() {
			if ($(window).scrollTop() > 5) {
				$('.navbar').addClass('active');
			} else {
				$('.navbar').removeClass('active');
			}
		});
	});
</script>

@yield('scripts')

<link rel="preload" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"></noscript>

</html>
