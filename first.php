<?php
include_once "functions.php";
echo "hello world";

/* ===== NEW =====
// %s means string
// %d means decimal
// %b means binary
// %x means hexadecimal 
// %X means capital hexadecimal
*/
echo "\n";

/**
 * Call functiion for check if a number is even or odd
 */
$x = 5;
if(isEven($x)) // argument
{
    echo "{$x} is an even number";
}else{
    echo "{$x} is an odd number";
}
echo PHP_EOL;

/**
 * call factorial function
 */
echo "Factorial of {$x} is ". factorial($x) . "\n";
echo sum(1,2,7);
echo PHP_EOL;

/**
 * call serve function
 */
serve("Noddles","1 plate");
echo PHP_EOL;

/**
 * call result function
 */
echo "Your Result: " . result(64);
echo PHP_EOL;

echo "The Unlimited Sum is ". unlimitedSum(1,2,3,4);
echo PHP_EOL;

/**
 * call large function
 */
doLargerTask();
echo PHP_EOL;

/**
 * call recursion number
 */
printNumber(10,20,2);

/**
 * call fibonnaci series
 * parameter old, new, end
 */
fibonacci(0,1,15);



