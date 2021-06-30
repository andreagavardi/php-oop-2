<?php

require_once __DIR__ . '/traits/game-detail.php';
require_once __DIR__ . '/classes/videogame.php';
require_once __DIR__ . '/classes/xbox-videogame.php';
require_once __DIR__ . '/database/videogames.php';

$videogames[0]->setIsUsed(true);
var_dump($videogames);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits-Exception</title>
    <style>
        img {
            max-width: 100%;
            object-fit: cover;
            margin: 0.5rem 0;
        }

        .videogames {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .videogame {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 1rem;
            width: calc(100% / 4 - 2rem);
        }
    </style>
</head>

<body>
    <div class="videogames">
        <?php foreach ($videogames as $videogame) : ?>
            <div class="videogame">
                <h2><?= $videogame->name() ?></h2>
                <img src="<?= $videogame->img ?>" alt="">
                <div>Prezzo: <?= $videogame->price() ?> €</div>
                <span> Genere: <?php foreach ($videogame->genre() as $genre) : ?>
                        <?= '-' . $genre ?>
                    <?php endforeach ?>
                </span>
            </div>
        <?php endforeach ?>
    </div>


</body>

</html>