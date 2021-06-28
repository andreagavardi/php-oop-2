<?php
class Product
{
    protected $name;
    protected $price;
    protected $category;
    private $quantity;

    public function __construct($name, $price, $category, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->quantity = $quantity;
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

$phone = new Product('I-phone', 1500, 'mobile', 25);

$lenovo = new Laptop('Ideapad-Gaming', 1150, 'notebook', 20, 8017596102500, '16 Gb', 'Intel-i7', '14.5 Pollici');

var_dump($phone, $lenovo);
