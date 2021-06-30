<?php

include __DIR__ . '/classes/products.php';
include __DIR__ . '/classes/users.php';
require_once __DIR__ . '/database/laptops.php';
//utente generico
$andrea = new User('andrea89', 32, 'andrea.example.com');

//setto un codice sconto per lo user andrea
$andrea->setCodice_sconto('AABBCCDD');


//creo utente premium luca
$luca = new Premium_user('Luca56lol', 25, 'luca.example@mail.com');

//setto un codice sconto
$luca->setCodice_sconto('BBCCDDEE');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops</title>
</head>

<body>

    <?php foreach ($laptops as $laptop) : ?>

        <h2><?= $laptop->getName() ?></h2>
        <h3><?= $laptop->getPrice() ?></h3>
        <span><?= $laptop->getCategory() ?></span>
        <div class="sconto">
            <?= $laptop->setDiscount($luca->getCodice_sconto(), $luca->getUserType(), $luca->getDiscount()); ?>
        </div>
        <span> Prezzo Scontato: <?= $laptop->getPrice(); ?></span>

    <?php endforeach ?>






</body>

</html>