<?php
include_once __DIR__ . '/Product.php';


// ball, extended product class  
class Ball extends Product {
    public $misura;

    public function __construct($price, $quantity, $name, $productor, $misura) {
        parent::__construct($price, $quantity, $name, $productor);

        $this->misura = $misura;
    }

    // methods
    public function printMisura() {
        return $this->misura;
    }
}