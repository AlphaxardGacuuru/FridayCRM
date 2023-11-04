<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token"
		  content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch"
		  href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito"
		  rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}"
		  rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet"
		  href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}"
		  rel="stylesheet">
	<link rel="stylesheet"
		  href="{{ asset('assets/libs/css/style.css') }}">
	<link rel="stylesheet"
		  href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
	<link rel="stylesheet"
		  href="{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }}">
	<link rel="stylesheet"
		  href="{{ asset('assets/vendor/charts/morris-bundle/morris.css') }}">
	<link rel="stylesheet"
		  href="{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
	<link rel="stylesheet"
		  href="{{ asset('assets/vendor/charts/c3charts/c3.css') }}">
	<link rel="stylesheet"
		  href="{{ asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">

</head>

<body>
	<noscript>
		<center>
			<h2 class="m-5">
				We're sorry but {{ config('app.name', 'Black Music') }}
				doesn't work properly without JavaScript enabled.
				Please enable it to continue.
			</h2>
		</center>
	</noscript>

	<div id="app"></div>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}"
			defer></script>

	<!-- jquery 3.3.1 -->
	<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	<!-- bootstap bundle js -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<!-- slimscroll js -->
	<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
	<!-- main js -->
	<script src="assets/libs/js/main-js.js"></script>
	<!-- chart chartist js -->
	<script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
	<!-- sparkline js -->
	<script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
	<!-- morris js -->
	<script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
	<script src="assets/vendor/charts/morris-bundle/morris.js"></script>
	<!-- chart c3 js -->
	<script src="assets/vendor/charts/c3charts/c3.min.js"></script>
	<script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
	<script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
	<script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>