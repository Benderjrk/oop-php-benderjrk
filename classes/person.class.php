<?php

class Person {
    // Properties
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public static $homePlanet = "Earth";

    public function getAge() {
        echo $this->age;
    }

    public function getName() {
        echo $this->name;
    }

    public function setAge($age) {
        $this->name = $age;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public static function setPlanetHome($newPlanet) {
        self::$planet = $newPlanet;
    }
}

?>