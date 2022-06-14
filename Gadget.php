<?php
require_once __DIR__ . "/Product.php";

class Gadget extends Product
{
    public $pet;

    public function __construct($_name, $_price, $_pet, $_availablity = "always")
    {
        parent::__construct($_name, $_price, $_availablity);
        $this->pet = $_pet;
    }

    public function infos()
    {
        return $this->name . "<br> euro " . $this->price . "<br>available: " . $this->availablity . "<br>pet: " . $this->pet;
    }
}
