<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Factory\VehicleFactory;

$bike = VehicleFactory::create('bicycle');
echo "Bicycle: " . $bike->getCostPerKm() . " - " . $bike->getFuelType() . "\n";

$car = VehicleFactory::create('car');
echo "Car: " . $car->getCostPerKm() . " - " . $car->getFuelType() . "\n";

$truck = VehicleFactory::create('truck');
echo "Truck: " . $truck->getCostPerKm() . " - " . $truck->getFuelType() . "\n";

$auto1 = VehicleFactory::createByDistanceAndWeight(10, 5);
echo "Auto1: " . get_class($auto1) . "\n";

$auto2 = VehicleFactory::createByDistanceAndWeight(30, 10);
echo "Auto2: " . get_class($auto2) . "\n";

$auto3 = VehicleFactory::createByDistanceAndWeight(10, 300);
echo "Auto3: " . get_class($auto3) . "\n";
