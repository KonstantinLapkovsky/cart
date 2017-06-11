<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/bc81c5de89.js"></script>
	<link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
	<title>@yield('title')</title>
	@yield('styles')
</head>
<body>
	@include('partials.header')
	<div class="container">
		@yield('content')
	</div>
	@yield('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>