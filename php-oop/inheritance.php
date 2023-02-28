<?php 
class ParentClass{

    private $name;

    public function __construct($name){
        $this->name = $name;
        $this->sayHi(); // child method should run
    }

    public function sayHi(){
        echo "Hi from {$this->name} \n";
    }

}

class ChildClass extends ParentClass{
    public function sayHi(){ // function override
        parent::sayHi(); // parent method call
        echo "Hello";
    }
}

//$call = new ChildClass("Sakib");

class Shape{
    protected $name;
    protected $area;

    public function __construct($name)
    {
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}" ;
    }

    public function calculateArea(){}
}

class Triangle extends Shape{

    private $a, $b, $c;

    public function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    public function calculateArea(){
        $perimeter = ($this->a+$this->b+$this->c)/2;
        $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
    }
}

$t = new Triangle(10,12,8);
$t->getArea();