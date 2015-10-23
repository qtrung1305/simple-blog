<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Dinh nghia Page Title cho cac trang con -->
	<title>@yield('head.title')</title>

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<!-- Dinh nghia them cac CSS rieng biet cho cac trang con neu co -->
	@yield('head.css')
</head>
<body>
	

	<div id="header">

		@include ('partials.navbar')

	</div> {{-- #Header --}}

	<!-- Noi chen noi dung khac biet chinh cua tung trang con -->
	@yield('body.content')

	@include ('partials.footer')


	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>

	<!-- Noi dinh nghia them cac javascript rieng cua cac trang con neu co -->
	@yield('body.js')

</body>
</html>