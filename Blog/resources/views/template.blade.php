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
					<a class='nav-link' href='{{action('ArticleFeedController@sendAllArticlesToView')}}'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>
				</li>
				<li class='nav-item'>
					<a class='nav-link' href='{{action('PostArticleController@displayRedactForm')}}'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>					
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