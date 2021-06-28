<?php

class Product
{
    protected $name;
    protected $price;
    protected $category;
    private $quantity;
    private $vouchers = [
        'AABBCCDD',
        'AACCDDBB',
        'BBCCDDEE',
        'CCDDEEFF'
    ];

    public function __construct($name, $price, $category, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->quantity = $quantity;
    }
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * ## Calcola sconto
     * 
     * funzione che una volta verificati 
     * il codice sconto (inserito dall'utente)
     * e il tipo di user 
     * applica lo sconto sul prezzo del prodotto
     * @param string $codice_sconto codice sconto da verificare
     * @param string $user_type tipo di utente 'general' o 'premium'
     * @param int $user_discount sconto da aplicare (in base al tipo di utente)
     * @return string avvisa se è stato applicato lo sconto, il valore di esso e cambia il prezzo dell'articolo  
     */
    public function setDiscount($codice_sconto, $user_type, $user_discount)
    {

        if (in_array($codice_sconto, $this->vouchers)) {
            //var_dump('sconto applicato');

            if ($user_type == 'premium') {
                $this->price -= $this->price * $user_discount / 100;
                echo 'il tuo sconto è del ' . $user_discount . ' %';
            } else {
                $this->price -= $this->price * 0.2;
                echo 'il tuo sconto è del ' . $user_discount . ' %';
            }
        } else {
            echo 'il tuo codice sconto non è nelle nostre liste';
        }
    }
}

class Laptop extends Product
{

    private $barcode;
    protected $ram;
    protected $processor;
    protected $display;
    public function _construct($name, $price, $category, $quantity, $barcode, $ram, $processor, $display)
    {
        parent::__construct($name, $price, $category, $quantity);
        $this->barcode = $barcode;
        $this->ram = $ram;
        $this->processor = $processor;
        $this->display = $display;
    }
}
