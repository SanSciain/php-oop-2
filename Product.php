<?php
class Product
{
    public $name;
    public $price;
    public $availablity;

    public function __construct($_name, $_price, $_availablity = "always")
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->availablity = $_availablity;
    }
}
