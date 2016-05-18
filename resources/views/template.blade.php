<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel='stylesheet' href='{{ asset('assets/css/bootstrap.min.css')}}' media='all' />
		<link rel='stylesheet' href='{{ asset('assets/css/grayscale.css')}}' media='all' />
		<link rel='stylesheet' href='{{ asset('assets/font-awesome/css/font-awesome.min.css')}}' media='all' />
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' media='all' />
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat:400,700' media='all' />
	</head>	
	<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		@yield('content')
		</div>
		
		<footer>
			<div class="container text-center">
				Copyright &copy; Lazo, Barrameda, Duremdes, Mendoza, Novo, Genobisa, Genabe, Barte. 2016
			</div>
		</footer>
	
	<script src='{{ asset('assets/js/jquery.js')}}'></script>
	<script src='{{ asset('assets/js/bootstrap.min.js')}}'></script>
	<script src='{{ asset('assets/js/jquery.easing.min.js')}}'></script>
	<script src='{{ asset('assets/js/grayscale.js')}}'></script>
	</body>
</html>