<?php 

/**
 * can't declear object directly
 * don't have functio body part
 * doing override with interface function 
 * implements multiple interface
 */

interface BaseAnimal{
    function isAlive();
    function canEat($param1,$param2);
    function bread();
}

class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat($param1,$param2){}
    function bread(){}
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

class Human implements BaseHuman{
    function isAlive(){}
    function canEat($param1,$param2){}
    function bread(){}
    function canTalk(){}
}

$h = new Human;
echo $h instanceof BaseHuman;

/**
 * Districts projects
 */

 class DistrictCollection implements IteratorAggregate,Countable{

    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts,$district);
    }

    function getDistricts(){
        return $this->districts;
    }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }

    function count(){
        return count($this->districts);
    }
 }

 $districts = new DistrictCollection;
 $districts->add("Dhaka");
 $districts->add("Borishal");
 $districts->add("Comilla");
 $districts->add("Sylhet");
 $districts->add("Khulna");

 foreach($districts as $district){
    echo $district . "\n";
 }
 echo count($districts);