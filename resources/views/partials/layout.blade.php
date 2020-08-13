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

	<a href="https://api.whatsapp.com/send?phone=+5492996743360" class="float-wp" target="_blank">
		<img class="my-float-wp" src="images/whatsapp.png" />
	</a>

	<style>
		.float-wp {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 18pt;
			right: 18pt;
			background-color: #40c351;
			color: #FFF;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 2px 2px 3px #999;
			z-index: 9999;
		}

		.my-float-wp {
			margin-top: 5px;
			margin-left: 0;
		}
	</style>
	@include('partials.footer')
</body>

<script src="{{ asset('js/app.js') }}"> </script>
@yield('scripts')

</html>
