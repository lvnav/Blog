@extends('template')

@section('postFeed')
	@foreach($all_articles as $article)
		<div class ='container jumbotron mb-1 pt-4 pb-4'> 
			<div class='row postHeader'>
				<a href="{{ action('ArticleFeedController@sendSingleArticleToView', ['id' => $article->id]) }}" class='col-2 pl-0 title'>{{ $article->title }}</a> 
				<span class='col-2 pr-0 offset-8 date'> {{  $article->created_at }} </span>
			</div>
			<span class='row content'> {{ $article->content }}</span>

		</div>
	@endforeach
@endsection