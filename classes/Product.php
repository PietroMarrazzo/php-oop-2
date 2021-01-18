<?php

    // product class
    class Product {
        // properties
        public $price;
        public $quantity;
        public $name;
        public $productor;

        // costructor
        public function __construct($price, $quantity, $name, $productor) {
            $this->price = $price;
            $this->quantity = $quantity;
            $this->name = $name;
            $this->productor = $productor;
        }
        // methods
        public function printName() {
            return $this->name;
        }

        public function printPrice() {
            return $this->price;
        }

        public function printQt() {
            return $this->quantity;
        }

        public function printProductor() {
            return $this->productor;
        }
    }
