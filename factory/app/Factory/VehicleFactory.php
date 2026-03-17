<?php

namespace App\Factory;

use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\VehicleInterface;

class VehicleFactory
{
    public static function create(string $type): VehicleInterface
    {
         $vehicle = match (strtolower($type)) {
            'bicycle' => new Bicycle(0.05, 'human'),
            'car' => new Car(0.15, 'essence'),
            'truck' => new Truck(0.5, 'diesel'),
            default => throw new \InvalidArgumentException('Unknown vehicle type'),
        };
        return $vehicle;
    }

    public static function createByDistanceAndWeight(float $distance, float $weight): VehicleInterface
    {
        if ($weight > 200) {
            return new Truck(0.5, 'diesel');
        } elseif ($weight > 20 || $distance > 20) {
            return new Car(0.15, 'essence');
        } else {
            return new Bicycle(0.05, 'human');
        }
    }
}
