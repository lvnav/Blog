<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PostArticleController extends Controller
{
    public function displayRedactForm()
    {
    	return view('redactArticleView');
    }

    public function storeFormData()
    {
    	$submit_title = \Request::get('title');
    	$submit_content = \Request::get('content');
    	$article = Article::create(['title' => $submit_title, 'content' => $submit_content]);
    	return view('successAddArticleView', compact('article'));	
    }
}
