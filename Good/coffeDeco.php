<?php
include_once "coffee.php";

abstract class CoffeeDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function getDescription(): string {
        return $this->coffee->getDescription();
    }

    public function cost(): float {
        return $this->coffee->cost();
    }
}
