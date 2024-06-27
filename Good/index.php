<?php
include_once "coffee.php";
include_once "coffeDeco.php";
include_once "simplecoffe.php";
include_once "milk.php";
include_once "sugar.php";
include_once "chocolate.php";

$coffee = new SimpleCoffee();
echo $coffee->getDescription() . " $" . $coffee->cost() . "<br>";

$coffee = new Milk($coffee);
echo $coffee->getDescription() . " $" . $coffee->cost() . "<br>";

$coffee = new Sugar($coffee);
echo $coffee->getDescription() . " $" . $coffee->cost() . "<br>";

$coffee = new Chocolate($coffee);
echo $coffee->getDescription() . " $" . $coffee->cost() . "<br>";
