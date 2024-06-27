<?php
include_once "coffee.php";

class SimpleCoffee implements Coffee {
    public function getDescription(): string {
        return "Simple Coffee";
    }

    public function cost(): float {
        return 5.00;
    }
}
