<?php

require_once "Shape.php";
require_once "Circle.php";
require_once "Rectangle.php";
require_once "Star.php";
require_once "ShapeFacade.php";

class User2
{
    public function __construct()
    {
        $obj = new ShapeFacade();

        $obj->drawRectangle();
        echo "<br>";
        $obj->drawStar();
        echo "<br>";
        $obj->drawCircle();
    }
}
new User2();

?>