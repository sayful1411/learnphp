<?php
/*
======= Data type ========
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

$result = true;
var_dump($result); // check data type

$name = 'Earth';
$uname = strtoupper($name);
echo "We're living on {$uname} \n";
printf("We're living on %s", $name); // NEW // %s means string
echo "\n";

$fname = 'Sayful';
$lname = 'Islam';
printf("My name is %s %s", $fname, $lname);
echo "\n";

// php output ways
$planet1 = 'Mercury';
$planet2 = 'Jupiter';
echo "The smallest planet is ".$planet1. " and the biggest planet is ".$planet2."\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The smallest planet is %s and the biggest planet is %s\n", $planet1, $planet2);