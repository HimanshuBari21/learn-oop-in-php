<title>Parent and Childs</title>
<?php

// parent class
abstract class Shape
{
    private $fillColor;

    public function setFillColor($fillColor)
    {
        $this->fillColor = $fillColor;
    }

    public function getFillColor()
    {
        return $this->fillColor;
    }
}

class Square extends Shape
{
    private $length;

    function __construct($length, $fillColor)
    {
        parent::setFillColor($fillColor);
        $this->length = $length;
    }

    public function area($unit)
    {
        return pow($this->length, 2) . $unit;
    }
}

class Rectangle extends Shape
{
    private $length;
    private $breath;

    function __construct($length, $breath, $fillColor)
    {
        parent::setFillColor($fillColor);
        $this->length = $length;
        $this->breath = $breath;
    }

    public function area($unit)
    {
        return $this->length * $this->breath . $unit;
    }
}

class Circle extends Shape
{
    private $radius;

    function __construct($radius, $fillColor)
    {
        parent::setFillColor($fillColor);
        $this->radius = $radius;
    }

    public function area($unit)
    {
        return number_format(pi() * pow($this->radius, 2), 2) . $unit;
    }
}

$chessBoard = new Square(6, 'red');
echo "<p>The area is " . $chessBoard->area('cm') . " and its color is " . $chessBoard->getFillColor();

$examPad = new Rectangle(6, 4, 'yellow');
echo "<p>The area is " . $examPad->area('cm') . " and its color is " . $examPad->getFillColor();

$plate = new Circle(6, 'white');
echo "<p>The area is " . $plate->area('cm') . " and its color is " . $plate->getFillColor();

echo (new Circle(2, "ol"))->getFillColor();
echo (new Circle(2, "ol"))->area('m');

$d = new Shape('orange'); // will troww error because abstract class

echo $id->getFillColor();

?>