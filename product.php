<?php

    // product class
    class Product {
        // properties
        public $price;
        public $quantity;
        public $name;
        public $productor;

        // costructor
        public function __constructor($price, $quantity, $name, $productor) {
            $this->$price = $price;
            $this->$quantity = $quantity;
            $this->$name = $name;
            $this->$productor = $productor;
        }
        // methods
    }



    // objects
    echo "Prezzo del prodotto:";