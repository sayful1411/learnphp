<?php
/*
1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
 
2. 1+2+3...…….100  Write a loop to calculate the summation of the series
*/

// Function for Even Or Odd Number
function even_odd($num) {
    if ($num % 2 == 0) {
      return "{$num} is an even number";
    } else {
      return "{$num} is an odd number";
    }
}

$number = 7;
echo even_odd($number); // 7 is an odd number
echo PHP_EOL;

// Summation Series 
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
  $sum += $i;
}
echo "The summation of the series 1 + 2 + 3 + ... + 100 is {$sum}";
