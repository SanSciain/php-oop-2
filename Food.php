<?php
require_once __DIR__ . "/Product.php";

class Food extends Product
{
    public $expering;
    public $type;

    public function __construct(
        $_name,
        $_price,
        $_expiring,
        $_type,
        $_availablity = "always"
    ) {
        parent::__construct($_name, $_price, $_availablity);
        $this->expering = $_expiring;
        $this->type = $_type;
    }

    public function infos()
    {
        return $this->name . "<br> euro " . $this->price . "<br>available: " . $this->availablity . "<br>expering: " . $this->expering . "<br>type: " . $this->type;
    }
}
