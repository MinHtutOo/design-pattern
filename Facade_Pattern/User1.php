<?php

require_once "Shape.php";
require_once "Circle.php";
require_once "Rectangle.php";
require_once "Star.php";
require_once "ShapeFacade.php";

class User1
{
    public function __construct()
    {
        $obj = new ShapeFacade();

        $obj->drawStar();
        echo "<br>";
        $obj->drawRectangle();
        echo "<br>";
        $obj->drawCircle();
    }
}
new User1();

?>