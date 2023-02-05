<?php
/* All Comment
Arithmetic operators
+ - * / % **
Assignment operators
= += -= *= /= %=
Increment operator
++ --
// NEW - BODMAS = Bracket, Or, Division, Multiplication, Addition, Substraction
// NEW - Operand(1), Operator(+)
// NEW - new line "\n"
*/   

$number = 10;
//$number = $number + 20;
//$number += 20;
//$number = $number - 5;
//$number -= 5;
//$number = $number * 2;
//$number *= 2;
//$number = $number / 5;
//$number /= 5;
//$number = $number % 4;
$number %= 4;
echo $number, "\n";

// assign multiple variable
$x = $y = $z = 10;
echo $x, "\n", $y, "\n", $z, "\n";

// More 
$n = 7;
$m = $n++; // ++$n
echo $m, "\n", $n;

/* 
//$m = $n++;
$m = $n
$n = $n + 1

//$m = ++$n
$n = $n + 1
$m = $n
*/