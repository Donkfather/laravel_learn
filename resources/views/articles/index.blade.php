@extends('app')

@section('content')
<div class="row">
	<div class="col-xs-6">		
		<h1>Articles</h1>
	</div>
	<div class="col-xs-6">
	<span class="text-right">
	<a href="{{url('/articles/create')}}" class="btn btn-primary buton" >Create Article</a>
	</span>
	</div>	
</div>
<hr>
	@foreach($articles as $article)
		<article>
			<h2>

			<a href="{{ url('/articles', $article->id)}}">{{ $article->title }}</a>

			</h2>

			<div class="body">
				
				{{ $article->body}}
			</div>
		</article>
	@endforeach
@stop