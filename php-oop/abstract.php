<?php 

/**
 * start with abstract keyword
 * can't use object direcly from abstract class
 * don't have functions body part
 * must call abstract method in child class
 */

abstract class Shape{
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape{

    private $base, $height;

    function __construct($base,$height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    function getArea(){
        return $this->base * $this->height;
    }

    function getPerimeter()
    {
        
    }

}

$r = new Rectangle(10,10);
echo $r->getArea();

//$s = new Shape; // can not access base class

abstract class OurClass{
    function sayHi(){
        echo "Hi";
    }
    // can't override 
    final function doSomething(){
        echo "Doing Something";
    }
    abstract function eat();
}

class MyClass extends OurClass{
    function eat(){
        echo "I am eating";
    }
}

$me = new MyClass;
$me->eat();