<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleFeedController extends Controller
{
    public function sendAllArticlesToView() // Devrais-je séparer cette fonction en deux ?
    {
    	$all_articles = Article::all();
    	$all_articles = $all_articles->sortByDesc('created_at');
    	return view('articleFeedView', ['all_articles' => $all_articles]);
    }

    public function sendSingleArticleToView($id) // Devrais-je séparer cette fonction en deux ?
    { 
    	$article = Article::findOrFail($id);
    	return view('singleArticleView', ['article'=> $article]);
    }
}
