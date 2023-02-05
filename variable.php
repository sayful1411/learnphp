<?php
$name = 'Bangladesh';
$age = 24;
$word = 'age';
$question = 'How are you?';
echo $$word; //NEW
echo "\n"; //NEW

// Important
echo 'Hello ' . $name;
echo "\n";
echo 'Hello $name';
echo "\n";
echo "Hello $name";
echo "\n";
echo "Hello {$name}, {$question} \n"; // Good Practice
echo "Hello {$name}, {$question} \n"; // Good Practice

define('PI', 3.14159);

//echo "Value of PI = ".PI;
//echo constant('PI');

$constant = 'constant';
echo "Value of PI = {$constant('PI')}";
