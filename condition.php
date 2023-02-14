<?php
$food = 'apple';
// Best practice for static data
if ('apple' == $food) {
    echo "It's has vitamin A";
} else {
    echo "Can't Find";
}
/*
Comparison Operators
== === != !== < > <= >=
Logical Operators
&& || !
 */
echo "\n";

// Leap Year
/* rules for calculate leap year
1 - divisable by 4
2 - divisable by 100
3 - divisable by 400
 */

$year = 2024;

if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leap year";
} elseif ($year % 4 == 0) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

echo "\n";
// best practice
if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

echo "\n";
/*
if(true && true){
echo "wow";
}
-------------here-------------
1)
true && true = true
true && false = false
false && true = false
false && false = false
2)
true || true = true
true || false = true
false || true = true
false || false = false
 */

// Nested and redable code
$condition1 = true;
$condition2 = true;
$condition3 = false;
// nested
if ($condition1) {
    if ($condition2) {
        if ($condition3) {
            echo "Match 3 condition";
        } else {
            echo "condition 3 didn't match";
        }
    } else {
        echo "condition 2 didn't match";
    }
} else {
    echo "condition 1 didn't match";
}

echo "\n";
// readable
if ($condition1 && $condition2 && $condition3) {
    echo "Match 3 condition";
} elseif ($condition1 && $condition2) {
    echo "condition 3 didn't match";
} elseif ($condition1) {
    echo "condition 2 didn't match";
} else {
    echo "condition 1 didn't match";
}
echo "\n";

// Ternary operator
$n = 10;
if ($n % 2 == 0) {
    echo "{$n} is a even number";
} else {
    echo "{$n} is a odd number";
}
echo "\n";
// good practice
$num = ($n % 2 == 0) ? "Even" : "Odd";
echo $num;
echo "\n";
$result = (12 == $n) ? "Twelve" : ((10 == $n) ? "Ten" : "A Number");
echo $result;
echo "\n";

// Switch
$color = 'green';

switch ($color) {
    /*case 'green':
    echo "Green is my favourite color";
    break;
    case 'blue':
    echo "Blue is my favourite color";
    break;*/
    case 'green':
    case 'blue':
        echo ucwords($color) . " is my favourite color";
        break;
    case 'red':
        echo "Red is not my favourite color";
        break;
    default:
        echo "Ok";
}
echo "\n";

// Nesting switch
$x = 12;
$z = $x % 2;

switch ($z) {
    case 0:
        switch ($x) {
            case $x > 0:
                echo "{$x} is a positive even number";
                break;
            case $x < 0:
                echo "{$x} is a negetive even number";
                break;
        }
        break;
    default:
        switch ($x) {
            case $x > 0:
                echo "{$x} is a positive odd number";
                break;
            case $x < 0:
                echo "{$x} is a negetive odd number";
                break;
        }
}

echo "\n";
// Best Practice
switch (true) {
    case (0 == $z && $x > 0):
        echo "{$x} is a positive even number";
        break;
    case (1 == $z && $x > 0):
        echo "{$x} is a positive odd number";
        break;
    case (0 == $z && $x < 0):
        echo "{$x} is a negetive even number";
        break;
    case (-1 == $z && $x < 0):
        echo "{$x} is a negetive odd number";
        break;
}
