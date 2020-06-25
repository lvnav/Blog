@extends('template')

@section('title')
<title>Poster un billet</title>
@endsection
@section('blogPostForm')
	<form method='post'>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class='jumbotron form-group'>
			<input type='text' name='title' placeholder="Titre de l'article" class='form-control' id='title'>
			<textarea name='content' class='form-control' id='content' placeholder="contenu de l'article..." rows='20' cols='100'></textarea>
			<button type='submit' class='btn btn-primary' name='send' id='send' value='Envoyer'>Envoyer</button>
		</div>
	</form>
@endsection 

