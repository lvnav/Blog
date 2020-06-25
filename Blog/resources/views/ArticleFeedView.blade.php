@extends('template')

@section('postFeed')
	<div class='card-deck-fluid d-flex flex-column'>
		@foreach($all_articles as $article)
			<div class ='card p-4 mb-3'> 
				<div class='row postHeader'>
					<a href="{{ action('ArticleFeedController@sendSingleArticleToView', ['id' => $article->id]) }}" class='card-title pl-3 title'>{{ $article->title }}</a> 
					<span class='card-text offset-9 date'> {{  $article->created_at }} </span>
				</div>
				<span class='card-text content'> {{ $article->content }}</span>
			</div>
		@endforeach
	</div>
@endsection