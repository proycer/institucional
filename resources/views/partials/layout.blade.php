<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="robots" content="all,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proycer</title>
	<link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<div class="site-wrap" id="home-section">
		@yield('content')
		@include('partials.footer')
	</div>
</body>

<a href="https://api.whatsapp.com/send?phone=+5492996743360" class="float-wp" id="whatsapp" target="_blank">
	<img class="my-float-wp" src="images/whatsapp.png" />
</a>

<script src="{{ asset('js/app.js') }}"> </script>
@yield('scripts')

</html>
