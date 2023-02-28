<?php 

/**
 * __clone()
 * clone not work if property or method come from reference or other class
 */

class FavColor{
    public $data;
    function __construct($data){
        $this->data = $data;
    }
    function setData($data){
        $this->data = $data;
    }
}

$fc1 = new FavColor('Some data');
//$fc2 = $fc1; // reference
$fc2 = clone $fc1; // clone / copy
$fc2->setData("New Data");

print_r($fc1);
print_r($fc2);