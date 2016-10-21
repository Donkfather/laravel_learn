<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	

	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	<div class="container">
		
	@include('partials.flash')

		@yield('content')

	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
		$('div.alert').not('alert-important').delay(3000).slideUp(300);

	</script>
	@yield('footer')

</body>
</html>