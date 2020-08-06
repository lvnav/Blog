<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Accueil</title>
    <script src="http://code.jquery.com/jquery.js"></script>
</head>
<body class='bg-light'>
    <header class="container-fluid text-center bg-info pt-5 pb-5">NULFLIX</header>
    @dump($movies)
    <div class="container">
        @foreach ($movies as $movie)
        <div class="card box-shadow mb-3">
            <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">{{$movie->overview}}</p>
                <button class="test offset-11 btn btn-primary">More</button>
            </div>
        </div>
        @endforeach
        <script>$('.test').click(function(){alert('zazez')})</script>
    </div>
</body>
</html>

