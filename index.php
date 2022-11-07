<?php

// POO Basics 5

//Bike
require_once 'Bicycle.php';
$bicycle = new Bicycle('blue', 1);

//Car
require_once 'Car.php';
$car = new Car('green', 4, 'electric');


// Test Switch
/// Test Car

var_dump($car);
$car->setCurrentSpeed(0);
echo "Vitesse actuelle: " . $car->getCurrentSpeed() . " km/h<br>";
echo "Allumage des feux: ";
var_export($car->switchOn());
echo "<br><br>";

$car->setCurrentSpeed(50);
echo "Vitesse actuelle: " . $car->getCurrentSpeed() . " km/h<br>";
echo "Allumage des feux: ";
var_export($car->switchOn());

/// Test Bike
var_dump($bicycle);
$bicycle->setCurrentSpeed(0);
echo "Vitesse actuelle: " . $bicycle->getCurrentSpeed() . " km/h<br>";
echo "Allumage des feux: " ;
var_export($bicycle->switchOn());
echo "<br><br>";

$bicycle->setCurrentSpeed(9);
echo "Vitesse actuelle: " . $bicycle->getCurrentSpeed() . " km/h<br>";
echo "Allumage des feux: " ;
var_export($bicycle->switchOn());
echo "<br><br>";


$bicycle->setCurrentSpeed(15);
echo "Vitesse actuelle: " . $bicycle->getCurrentSpeed() . " km/h<br>";
echo "Allumage des feux: " ;
var_export($bicycle->switchOn());



