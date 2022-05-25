<?php

include './Modules/Movie.php';

include './db.php';

//$pippo = new Movie('Inception','boh','Nolan','USA');

var_dump('Scroll down for better visualization');

//this will be the array of object
$arrayClassMovies = [];

for ($i = 0; $i < count($phpMovies); $i++) {

    //$phpMovies is the associative array imported from db.php

    $movie = new Movie($phpMovies[$i]['title'], $phpMovies[$i]['year'], $phpMovies[$i]['poster_path'], $phpMovies[$i]['vote_average']);


    //visualizzo a schermo con var_dump
    var_dump("Movie $i:");

    var_dump($movie->getTitle());
    var_dump($movie->getYear());
    var_dump($movie->getPoster());
    var_dump($movie->getVote());
    var_dump('___________________________________________________________');


    $arrayClassMovies[] = $movie;
};

//var_dump($arrayClassMovies);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <div class="container py-5">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">

            <?php foreach($arrayClassMovies as $movie) {?>

                <div class="col">
                    <div class="card overflow-hidden border-2 bg-secondary border-dark h-100 text-center text-light">
                        <img src="<?php echo $movie->poster ?>" alt="">
                        <div class="card-body">
                            <h4><?php echo $movie->title ?></h4>
                            <small><?php echo $movie->year ?></small>
                            <p>Vote: <?php echo $movie->vote ?>/10</p>
                        </div>
                    </div>
                </div>

            <?php }?>

        </div>

    </div>

</body>

</html>