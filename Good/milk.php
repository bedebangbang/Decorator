<?php
include_once "coffeDeco.php";

class Milk extends CoffeeDecorator {
    public function getDescription(): string {
        return $this->coffee->getDescription() . ", Milk";
    }

    public function cost(): float {
        return $this->coffee->cost() + 1.50;
    }
}
