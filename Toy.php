<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product
{
    public $material;

    public function __construct(
        $_name,
        $_price,
        $_material,
        $_availablity = "always"
    ) {
        parent::__construct($_name, $_price, $_availablity);
        $this->material = $_material;
    }

    public function infos()
    {
        return $this->name . "<br> euro " . $this->price . "<br>available: " . $this->availablity . "<br>material: " . $this->material;
    }
}
