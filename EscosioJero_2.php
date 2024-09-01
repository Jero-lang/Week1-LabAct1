<?php

class Person {
    public $firstName;
    public $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

class Car {
    public $make;
    public $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo() {
        return $this->make . ' ' . $this->model . ' (' . $this->year . ')';
    }
}

$person = new Person("John", "Doe", 30);

echo "Person's Full Name: " . $person->getFullName() . PHP_EOL;
echo "Person's Original Age: " . $person->getAge() . PHP_EOL;

$person->setAge(31);

echo "Person's Updated Age: " . $person->getAge() . PHP_EOL;

$car = new Car("Toyota", "Camry", 2020);

echo "Car Info: " . $car->getCarInfo() . PHP_EOL;

?>
