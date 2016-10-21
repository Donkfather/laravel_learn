<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">

	
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	<div class="container">
		
		@if(Session::has('flash_message'))
			<div class="alert alert-success">{{ Session::get('flash_message')}}</div>
		@endif


		@yield('content')

	</div>

	@yield('footer')

</body>
</html>