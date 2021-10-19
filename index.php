<?php

require_once 'Bicycle.php';

$bike = new Bicycle("blue", 15);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br>';

$rockrider = new Bicycle("yellow",10);

echo $rockrider->forward();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed() . ' km/h' . '<br>';
echo $rockrider->brake(). '<br>';

$tornado = new Bicycle( "black", 8);

echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed() . ' km/h' . '<br>';
echo $tornado->brake(). '<br>';

require_once 'Cars.php';

$mini = new Cars("red", 5, "electric");

echo $mini->start();
echo '<br> Démarrage ok' . '<br>';
echo $mini->forward();
echo '<br> Vitesse de la voiture : ' . $mini->getCurrentSpeed() . ' km/h' . '<br>';
echo $mini->brake();
echo '<br> Vitesse de la voiture : ' . $mini->getCurrentSpeed() . ' km/h' . '<br>';
echo $mini->brake();