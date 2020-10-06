<?php

// Creating a Person class with static values and new Person object values
class Person {
    // Properties
    // Private so cannot be accessed outside of the class
    private $name;
    private $age;

    // constructing a new object with new Person
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // this is a static value to new Person does not need to be called.
    // value obtained from Person::$homePlanet
    public static $homePlanet = "Earth";

    // allows private age value to be accessed outside of class
    public function getAge() {
        echo $this->age;
    }

    // allows private name value to be accessed outside of class
    public function getName() {
        echo $this->name;
    }

    // allows private age value to be set
    public function setAge($age) {
        $this->name = $age;
    }

    // allows private name value to be set
    public function setName($name) {
        $this->name = $name;
    }

    // static function accessed by Person::setPlanetHome();
    public static function setPlanetHome($newPlanet) {
        self::$planet = $newPlanet;
    }
}

?>