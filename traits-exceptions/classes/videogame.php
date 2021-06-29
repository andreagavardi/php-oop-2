<?php

class Videogame
{

    protected $name;
    protected $genre;
    public $img = 'https://store-images.s-microsoft.com/image/apps.38595.13798539581762600.215d02f1-0142-4972-88fb-175001d957e3.4cc7b353-559a-4bf8-8bad-8c88c6957b08';
    protected $price;

    function __construct($name, $genre, $price, $disponbility)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->price = $price;
        $this->disponbility = $disponbility;
    }
    public function name()
    {
        return $this->name;
    }
    function price()
    {
        return $this->price;
    }
    function genre()
    {
        return $this->genre;
    }
}
