<?php 

//class
class Cat{
    // property
    public $name;
    public $color;
    // constructor 
    public function __construct($catName,$catColor=0){
        $this->name = $catName;
        $this->color = $catColor;
    }
    // method
    function sayMeow(){
        echo "Meow, ";
    }
    function sayInfo(){
        $this->sayMeow();
        if($this->color){
            echo "My name is {$this->name} and my color is {$this->color} \n";
        }else{
            echo "My name is {$this->name} and I don't know what color am I \n";
        }
    }
}

// object
$c1 = new Cat("kalu","red"); // auto call construct method
$c2 = new Cat("sadai",);

// access
$c1->sayInfo();
$c2->sayInfo();


?>