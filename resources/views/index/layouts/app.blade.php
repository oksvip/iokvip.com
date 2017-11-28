<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
	<title>@yield('title', 'Sunrise') - INSTANT</title>
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('static/index/css/bootstrap.css') }}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{ asset('static/index/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('static/index/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- Just for debugging purposes. Don't actually copy this line! -->
	<!--[if lt IE 9]><script src="{{ asset('static/index/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Static navbar -->
	@include('index.layouts._header')

	<!-- Content -->
	@yield('content')

	<!-- Social -->
	@include('index.layouts._footer')

	<!-- Bootstrap core JavaScript -->
	<script src="{{ asset('static/index/js/jquery.min.js') }}"></script>
	<script src="{{ asset('static/index/js/bootstrap.min.js') }}"></script>
</body>
</html>
