<?php 

/**
 * can use without declear object
 * $this means object state
 * can't use $this into static method
 * static keyowrd must set before property and method
 */

class MathCalculator{

    private $number;
    static $name;

    static function fibonacci($n){
        //$this->number = 12; // can't use this keyword
        self::$name; // only use static property
        echo "Fibonacci $n \n";
    }
    function factorial($n){
        //$this->name; // can't use static property
        self::$name = "ABCD \n";
        self::fibonacci(7); // 
        $this->number = 12;
        echo "Factorial $n";
    }
}

$math = new MathCalculator;
$math->factorial(8);

MathCalculator::fibonacci(8);
echo MathCalculator::$name;

// another example

class A{
    //public static $name;
    //private static $name;
    protected static $name;
    static function sayHi(){
        self::$name = "Hello \n";
        echo "Hello from A \n";
    }
}

class B extends A{
    // If you want to override a static funtion you should must use static keyoword both funciton
    static function sayHi(){
        parent::sayHi();
        echo parent::$name;
        echo "Hello from B \n";
    }
}

B::sayHi();

/**
 * Detailed discussion on early and late binding
 */

 class Planet{
    static function echoName(){
        //echo self::getName(); // represent it's own class function
        echo static::getName(); // represent it's child class function
    }

    static function getName(){
        return "Planet";
    }
 }

 class Earth extends Planet{
    static function getName(){
        return "Earth";
    }
 }

 //Planet::echoName();
 Earth::echoName();