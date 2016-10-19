@extends('app')

@section('content')

<h1>Write a New Article</h1>

<hr>
<form method="POST" action="{{action('ArticlesController@store')}}">
	{!!csrf_field()!!}
	<div class="form-group">
	<label>Title:</label>	
	<input type="text" name="title" class="form-control">

	</div>

	<div class="form-group">
	<label>Body:</label>	
	<textarea class="form-control" rows="3" name="body"></textarea>

	</div>

	<div class="form-group">
		
		<label>Publish On:</label>
		<input type="date" name="published_at" value="{{date('Y-m-d')}}">

	</div>

	<div class="form-group">	
	<input type="submit" name="Add Article" class="btn btn-primary form-control">
	
	</div>

</form>

@include('errors.list')


@stop