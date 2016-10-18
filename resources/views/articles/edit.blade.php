@extends('app')

@section('content')
	<h1>Edit: {!! $article->title !!}</h1>

	<hr>
	<form method="PATCH" action="{{action('ArticlesController@update',[$article->id])}}">


	{!!csrf_field()!!}
	<div class="form-group">
	<label>Title:</label>	
	<input type="text" name="title" class="form-control" value="{{$article->title}}">

	</div>

	<div class="form-group">
	<label>Body:</label>	
	<textarea class="form-control" rows="3" name="body">{{$article->body}}</textarea>

	</div>

	<div class="form-group">
		
		<label>Publish On:</label>
		<input type="date" name="published_at" value="{{$article->published_at->toDateString()}}">

	</div>

	<div class="form-group">	
	<input type="submit" name="Add Article" class="btn btn-primary form-control">
	
	</div>

</form>

@if ($errors->any())
	<ul class="alert alert-danger">
		
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach

	</ul>
@endif
@stop