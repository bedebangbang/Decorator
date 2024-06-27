<?php
include_once "coffee.php";

class SimpleCoffee implements Coffee {
    private $description = "Simple Coffee";
    private $cost = 5.00;

    public function getDescription(): string {
        return $this->description;
    }

    public function cost(): float {
        return $this->cost;
    }

    public function addMilk() {
        $this->description .= ", Milk";
        $this->cost += 1.50;
    }

    public function addSugar() {
        $this->description .= ", Sugar";
        $this->cost += 0.50;
    }

    public function addChocolate() {
        $this->description .= ", Chocolate";
        $this->cost += 2.00;
    }
}
