<?php

require_once 'Bicycle.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bike);

require_once 'Cars.php';
$car = new Car('green', 4, 'electric');
var_dump($car);

require_once 'Truck.php';
$tanker = new Truck('white', 2, 'fuel', 3000);
var_dump($camion);
echo $camion->filling();
