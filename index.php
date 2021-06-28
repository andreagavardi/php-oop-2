<?php

include __DIR__ . '/classes/products.php';
include __DIR__ . '/classes/users.php';

// prodotto generico
$phone = new Product('I-phone', 1500, 'mobile', 25);

//prodotto della classe Laptop
$lenovo = new Laptop('Ideapad-Gaming', 1150, 'notebook', 20, 8017596102500, '16 Gb', 'Intel-i7', '14.5 Pollici');

//utente generico
$andrea = new User('andrea89', 32, 'andrea.example.com');

//setto un codice sconto per lo user andrea
$andrea->setCodice_sconto('BBCCDDEE');

//var_dump($andrea->getCodice_sconto());

//creo utente premium luca
$luca = new Premium_user('Luca56lol', 25, 'luca.example@mail.com');


//$phone->setDiscount($andrea->getCodice_sconto()); controllo se andrea ha diritto al codice sconto
