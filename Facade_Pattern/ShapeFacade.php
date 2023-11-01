<?php

class ShapeFacade
{
    private $circle;
    private $rectangle;
    private $star;

    public function __construct()
    {
        $this->circle = new Circle();
        $this->rectangle = new Rectangle();
        $this->star = new Star();
    }

    public function drawCircle()
    {
        $this->circle->draw();
    }

    public function drawRectangle()
    {
        $this->rectangle->draw();
    }

    public function drawStar()
    {
        $this->star->draw();
    }
}

?>