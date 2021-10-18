<?php

require_once 'truck.php';

$bicycle = new truck('blue', 3, "fuel", 1);

echo $truck->loadLevel()."<br>";

echo $truck->forward()."<br>";

echo $truck->brake()."<br>";



