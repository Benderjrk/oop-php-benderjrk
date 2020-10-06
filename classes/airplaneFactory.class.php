<?php

// Create an airplane class
class Airplane {
    private $airplaneMake;
    private $airplaneModel;

    public function __construct(string $make, string $model) {
        $this->airplaneMake = $make;
        $this->airplaneModel = $model;
    }

    public function getMakeAndModel() {
        return $this->airplaneMake . ' ' . $this->airplaneModel;
    }
}

// Create an airplane factory
class AirplaneFactory {
    // Create function uses airplane class to create airplane object
    public static function create(string $make, string $model) {
        return new Airplane($make, $model);
    }
}

// have the factory create the Airplane object
$caravan = AirplaneFactory::create('Cessna', '208');

// outputs "Cessna 208"
echo $caravan->getMakeAndModel();