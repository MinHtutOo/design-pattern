<?php 

abstract class ManualGearFactory
{

}

class AudiManualGear extends ManualGearFactory
{
    public function getName()
    {
        echo __CLASS__ ." with engine power 204hp!<br>";
    }
}

class NissanManualGear extends ManualGearFactory
{
    public function getName()
    {
        echo __CLASS__ ." with engine power 107hp!<br>";
    }
}

abstract class AutoGearFactory
{

}

class AudiAutoGear extends AutoGearFactory
{
    public function getName()
    {
        echo __CLASS__ ." with engine power 136hp!<br>";
    }
}

class NissanAutoGear extends AutoGearFactory
{
    public function getName()
    {
        echo __CLASS__ ." with engine power 105hp!<br>";
    }
}

abstract class CarFactories
{
    abstract function createCar1();
    abstract function createCar2();
}

class AutoCarMaker extends CarFactories
{
    public function createCar1()
    {
        return new AudiAutoGear();
    }

    public function createCar2()
    {
        return new NissanAutoGear();
    }
}

class ManualCarMaker extends CarFactories
{
    public function createCar1()
    {
        return new AudiManualGear();
    }

    public function createCar2()
    {
        return new NissanManualGear();
    }
}

$autoCar = new AutoCarMaker();
$audiAuto = $autoCar->createCar1();
$nissanAuto = $autoCar->createCar2();

$manualCar = new ManualCarMaker();
$audiManual = $manualCar->createCar1();
$nissanManual = $manualCar->createCar2();

$audiAuto->getName();
$nissanAuto->getName();
$audiManual->getName();
$nissanManual->getName();

?>