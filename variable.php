<?php
/**
 * Predefined Variable
 *There are 12 predefined variables in php 8
 *1.$GLOBALS
 *2.$_SERVER
 *3.$_REQUEST
 *4.$_FILES
 *5.$_ENV
 *6.$_SESSION
 *7.$_COOKIE
 *8.$_GET
 *9.$_POST
 *10.$http_response_header
 *11.$argc
 *12.$argv
 */
$name = 'Bangladesh';
$age = 24;
$word = 'age';
$question = 'How are you?';
$name2 = &$name;
echo $$word; //NEW
echo $name2; //NEW
echo "\n"; //NEW

// Important
echo 'Hello ' . $name;
echo "\n";
echo 'Hello $name';
echo "\n";
echo "Hello $name";
echo "\n";
echo "Hello {$name}, {$question} \n"; // Good Practice

define('PI', 3.14159);

//echo "Value of PI = ".PI;
//echo constant('PI');

$constant = 'constant';
echo "Value of PI = {$constant('PI')}";
