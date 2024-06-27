<?php
include_once "coffeDeco.php";

class Chocolate extends CoffeeDecorator {
    public function getDescription(): string {
        return $this->coffee->getDescription() . ", Chocolate";
    }

    public function cost(): float {
        return $this->coffee->cost() + 2.00;
    }
}
