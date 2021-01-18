<?php
include_once __DIR__ . '/Product.php';


// bike, extended product class  
class Byke extends Product {
    public $lunghezza;

    public function __construct($price, $quantity, $name, $productor, $lunghezza) {
        parent::__construct($price, $quantity, $name, $productor);

        $this->lunghezza = $lunghezza;
    }

    // methods
    public function printLng() {
        return $this->lunghezza;
    }
}