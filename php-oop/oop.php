<?php 

/**
 * Note from - https://www.phptutorial.net/php-oop
 * ==================== PHP OBJECTS & CLASSES =================
 * === PHP Objects ===
 * Objects have states and behaviors.
 * A class is a blueprint for creating objects.
 * Properties represent the object’s state, and methods represent the object’s behavior. Properties and methods have visibility.
 * Use the new keyword to create an object from a class.
 * The $this variable references the current object of the class.
 * 
 * === PHP $this ===
 * PHP $this keyword references the current object of the class. It’s only available within the class.
 * Do use the method chaining by returning $this from a method to make the code more concise.
 * 
 * === PHP Access Modifiers ===
 * Use the public access modifier to allow access to properties and methods from both inside and outside of the class.
 * Use the private access modifier to prevent access from the outside of the class.
 * Do use private properties with a pair of public getter/setter methods.
 * Use protected properties and methods can only be accessed within the class and in any child classes of the class.
 * 
 * === PHP Constructor ===
 * PHP constructor is a special method that is called automatically when an object is created.
 * Do use constructor promotion as much as possible to make the code shorter.
 * 
 * === PHP Destructor ===
 * Use the __destruct() to define a destructor for a class.
 * PHP automatically invokes the destructor when the object is deleted or the script is terminated.
 * 
 * === PHP Inheritance ===
 * Inheritance allows a class to reuse the code of another class without duplicating it.
 * Use the extends keyword to define one class that inherits from another class.
 * A class that inherits another class is called a subclass, a child class, or a derived class. The class from which the subclass inherits is a parent class, a superclass, or a base class.
 * A subclass can have its own properties and methods.
 * Use $this keyword to call the methods of the parent class from methods in the child class.
 * The constructor of the child class doesn’t automatically call the constructor of its parent class.
 * Use parent::__construct(arguments) to call the parent constructor from the constructor in the child class.
 * Method overriding allows a child class to define a method that overrides (or replaces) the method already provided by its parent class.
 * Use parent:: to call the overridden method in the overriding method.
 * Use the final method when you don’t want a child class’s method to override a parent class’s method.

 * === PHP Abstract Class ===
 * An abstract class cannot be instantiated. It provides an interface for other classes to extend.
 * An abstract method doesn’t have an implementation. If a class contains one or more abstract methods, it must be an abstract class.
 * A class that extends an abstract class needs to implement the abstract methods of the abstract class.
 * 
 * === PHP Interface ===
 * Interfaces cannot have properties, while abstract classes can
 * All interface methods must be public, while abstract class methods is public or protected
 * All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
 * Classes can implement an interface while inheriting from another class at the same time
 *
 * === PHP Polymorphism ===
 * Polymorphism allows objects of different classes to respond differently to the same message.
 * Use interfaces or abstract classes to implement polymorphism in PHP.
 * call object in an array
 * 
 * === PHP Static Methods and Properties ===
 * Use the static keyword to define static methods and properties.
 * Use the self keyword to access static methods and properties within the class.
 * 
 * === PHP Magic Method ===
 * PHP calls the __get() method automatically when you access a non-existing or inaccessible property.
 * PHP calls the __set() method automatically when you assign a value to a non-existing or inaccessible property.
 * Implement the __toString() magic method to create the string representation of an object.
 * The __toString() method must return a string value or PHP raises an error.
 * Use clone to perform a shallow copy of an object.
 * Combine clone and __clone() method to create a deep copy of an object.
 * 
 * 
 */

 class Car {
    private $make;
    private $model;
    private $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function get_model() {
        return $this->model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_make($make) {
        $this->make = $make;
    }

    public function set_model($model) {
        $this->model = $model;
    }

    public function set_year($year) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Car make: " . $this->make . "\n";
        echo "Car model: " . $this->model . "\n";
        echo "Car year: " . $this->year . "\n";
    }
}

// Create a new Car object with make = "Toyota", model = "Corolla", year = 2015
$my_car = new Car("Toyota", "Corolla", 2015);

// Display the car's information
$my_car->display_info();

// Update the car's make and model to "Honda" and "Civic", respectively
$my_car->set_make("Honda");
$my_car->set_model("Civic");

// Display the updated car information
$my_car->display_info();


