@extends('app')

@section('content')
	<h1>{{ $article->title}}</h1>

	<hr>

	<body>
		{{ $article->body }}
	</body>

@stop