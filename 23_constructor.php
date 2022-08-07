<?php

class Animals{
    public $name;
    public $color;

    public function __construct($animalName = "default" , $animalColor = "default"){
        $this->name = $animalName;
        $this->color = $animalColor;
    }

    public function sleep(){
        echo "Good Night...";
    }

}

class Dog extends Animals{

    public function greeting(){
        echo "Hello Dog";
    }
}

$animal = new Animals("Shwe Wah","Yellow");

$dog = new Dog("Aung Net","Black");
// $dog->greeting();
// $animal->sleep();
$dog->sleep();

echo $dog->name;