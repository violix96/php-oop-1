<?php
require_once __DIR__ . '/MODELS/Movie.php';
require_once __DIR__ . '/MODELS/Actor.php';

// creazione delle istanze di movie e aggiunta di attori
$inception = new Movie('Inception', 'Sci-Fi', 8);
$inception->addActor(new Actor('Leonardo DiCaprio'));
$inception->addActor(new Actor('Joseph Gordon-Levitt'));

$laLeggendaDiAlJohnEJack = new Movie('La leggenda di Al, John e Jack', 'Commedia', 7);
$laLeggendaDiAlJohnEJack->addActor(new Actor('Aldo Baglio'));
$laLeggendaDiAlJohnEJack->addActor(new Actor('Giovanni Storti'));
$laLeggendaDiAlJohnEJack->addActor(new Actor('Giacomo Poretti'));

$fightClub = new Movie('Fight Club', 'Drammatico', 8);
$fightClub->addActor(new Actor('Brad Pitt'));
$fightClub->addActor(new Actor('Edward Norton'));

$toroScatenato = new Movie('Toro scatenato', 'Drammatico', 10);
$toroScatenato->addActor(new Actor('Robert De Niro'));

$queiBraviRagazzi = new Movie('Quei bravi ragazzi', 'Drammatico', 9);
$queiBraviRagazzi->addActor(new Actor('Ray Liotta'));
$queiBraviRagazzi->addActor(new Actor('Robert De Niro'));

// array di film
$movies = [$inception, $laLeggendaDiAlJohnEJack, $fightClub, $toroScatenato, $queiBraviRagazzi];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Elenco Film</h1>

        <?php foreach ($movies as $movie) : ?>
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title"><?php echo $movie->getTitle(); ?></h2>
                    <p class="card-text"><strong>Categoria:</strong> <?php echo implode($movie->getCategory()); ?></p>
                    <p class="card-text"><strong>Punteggio:</strong> <?php echo $movie->getRating(); ?></p>

                    <?php $actors = $movie->getActors(); ?>
                    <?php if (!empty($actors)) : ?>
                        <p class="card-text"><strong>Attori:</strong></p>
                        <ul class="list-unstyled">
                            <?php foreach ($actors as $actor) : ?>
                                <li><?php echo $actor->getName(); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <p class="text-center">Numero totale di film: <?php echo Movie::getTotalMovies(); ?></p>
    </div>
</body>

</html>