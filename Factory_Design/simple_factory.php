<?php 

# Simple Factory Design Pattern
class Marcedee 
{
    public function __construct()
    {
        echo "We have created " . __CLASS__ ." car!<br>";
    }

    public function driveRange()
    {
        echo "You can drive ". __CLASS__ ." car 150 miles per hour.";
    }
}

class Toyota 
{
    public function __construct()
    {
        echo "We have created " . __CLASS__ ." car!<br>";
    }

    public function driveRange()
    {
        echo "You can drive ". __CLASS__ ." car 120 miles per hour.";
    }
}

class CarFactory
{
    public static function make($type = "")
    {
        if(empty($type)) {
            throw new Exception("Must enter car type!<br>");
        } else {
            $classname = ucfirst($type);
            if(!class_exists($classname)) {
                throw new Exception("We don't make {$type} car!");
            }else {
                return new $classname();
            }
        }

    }
}
try {
    $car = CarFactory::make("toyota");
    $car->driveRange();
}catch(Exception $e) {
    echo $e->getMessage();
}

?>