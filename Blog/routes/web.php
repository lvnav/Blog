<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route menant vers la page de création d'article
Route::get('redactArticle', 'PostArticleController@displayRedactForm')->name('redactArticle');
// Route de soumission d'un nouvel article
Route::post('redactArticle', 'PostArticleController@storeFormData')->name('redactArticleStore');


// Route menant vers le fil d'articles
Route::get('articleFeed', 'ArticleFeedController@sendAllArticlesToView')->name('articleFeed');
// Route menant vers un article via son {id}
Route::get('articleFeed/{id}', 'ArticleFeedController@sendSingleArticleToView')->name('articleFeed');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/app', function(){
	return view('layouts/app');});