<?php
include_once "coffee.php";
include_once "simpleCoffee.php";

$coffee = new SimpleCoffee();
echo $coffee->getDescription() . " $" . $coffee->cost() . "<br>";

$coffee->addMilk();
echo $coffee->getDescription() . " $" . $coffee->cost() . "<br>";

$coffee->addSugar();
echo $coffee->getDescription() . " $" . $coffee->cost() . "<br>";

$coffee->addChocolate();
echo $coffee->getDescription() . " $" . $coffee->cost() . "<br>";
?>
