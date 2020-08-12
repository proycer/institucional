<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>Proycer</title>
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
	
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
