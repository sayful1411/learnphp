<?php 

/**
 * always echo get property
 */

//class
class Human{

    // property or attribute
    public $name;

    // methods
    function sayHello(){
        echo "Hello, ";
        $this->sayName(); // call sayname() method
    }
    function sayName(){
        echo "My name is {$this->name} \n";
    }

}

// object
$h1 = new Human;
$h1->name = "Sakibul"; // set
$h2 = new Human; // multiple objects
$h2->name = "Hasan"; // set

// access
$h1->sayHello();
//$h1->sayName();
//echo $h1->name; // get

$h2->sayHello();
// $h2->sayName();
//echo $h2->name; // get

?>