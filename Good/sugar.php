<?php
include_once "coffeDeco.php";

class Sugar extends CoffeeDecorator {
    public function getDescription(): string {
        return $this->coffee->getDescription() . ", Sugar";
    }

    public function cost(): float {
        return $this->coffee->cost() + 0.50;
    }
}
