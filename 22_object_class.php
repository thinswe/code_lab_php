<?php

class Car {
    // properties
    private $name;
    public $price;

    // methods

    public function getName(){
        return $this->name;
    }

    public function setName($userName = "default"){
        $this->name = $userName;
    }

    public function getCarName($userName = "default"){
        $this->name = $userName;
        return $this->name;
    }

    public function getCarPrice($userPrice ="0"){
        $this->price = $userPrice;
        echo $this->price;
    }

}

$result = new Car(); // obj create

$result->setName("AAA");
// echo $result->name;

$name = $result->getName();
echo $name;

// $name = $result->getCarName("BMW");
// echo $name;
// $result->getCarPrice("15000$");