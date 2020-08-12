<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Proycer</title>
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	@yield('content')
	@include('partials.footer')
</body>

<script src="{{ asset('js/app.js') }}"> </script>
@yield('scripts')

</html>
