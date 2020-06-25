@extends('template')
@section('title')
<title>Billet Posté !</title>
@section('content')
<div class='alert alert-success' role='alert'>L'article {{ $article->title }} a été posté!</div>
@endsection