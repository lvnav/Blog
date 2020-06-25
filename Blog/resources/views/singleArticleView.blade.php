@extends('template')

@section('content')
	<div class='card p-3'>
		<h1 class='card-title'>{{$article->title}}</h1>
		<p class='card-text'>{{ $article->content }}</p>
		<p class='card-text justify-content-end'>{{ $article->created_at }}</p>
	</div>
@endsection

