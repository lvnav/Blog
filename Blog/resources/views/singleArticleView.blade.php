@extends('template')

@section('content')
	<div class='jumbotron pt-3 pb-3'>
		<h1 class='row pb-4'>{{$article->title}}</h1>
		<p class='row'>{{ $article->content }}</p>
		<p class='row justify-content-end'>{{ $article->created_at }}</p>
	</div>
@endsection

