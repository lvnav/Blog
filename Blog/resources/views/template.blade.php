<!DOCTYPE html>
<html>
	<head>
		@yield('title')
		<meta charset="utf-8">
		<link href='{{asset('css/css.css')}}' rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body id='body'>

		<header class='text-center'>Mon Blog</header>

		<nav class='navbar navbar-expand-sm'>
			<ul class='navbar-nav'>
				<li class='nav-item'>
					<a class='nav-link' href='{{action('ArticleFeedController@sendAllArticlesToView')}}'>Accueil</a>
				</li>
				<li class='nav-item'>
					<a class='nav-link' href='{{action('PostArticleController@displayRedactForm')}}'>Poster un article</a>					
				</li>

			
            </ul>
		</nav>

		<section class='container'>
			@yield('blogPostForm')
			@yield('content')
			@yield('postFeed')
		</section>

		<footer></footer> 	

	</body>
</html> 