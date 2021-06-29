<?php

class Videogame
{

    protected $name;
    protected $genre;
    public $img;
    protected $price;

    function __construct($name, $genre, $img = '', $price, $disponbility)
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
