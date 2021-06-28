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
