<?php

interface Car
{
    public function getName();
}

class Audi implements Car
{
    public function getName()
    {
        echo __CLASS__;
    }
}

class Toyota implements Car
{
    public function getName()
    {
        echo __CLASS__;
    }
}

abstract class CarFactory
{
    abstract function make($type);
}

class CarMaker extends CarFactory
{
    public function make($type)
    {
        if($type == "Audi") {
            return new Audi();
        }else if($type == "Toyota") {
           return new Toyota();
        }
    }
}

function outCar(Car $car)
{
    $car->getName();
}

$car = new CarMaker();
$audi = $car->make("Audi");
$toyota = $car->make("Toyota");

outCar($toyota);

?>