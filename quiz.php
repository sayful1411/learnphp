<?php
/**
 * quiz 2 / Module 2
 */
echo "========== Quiz 1 ========== \n";
// question 7
for ($i=0; $i<=2; print ++$i){
    print ++$i;
}
echo PHP_EOL;

// question 8
var_dump(123);
var_dump(0123);

// question 9
$looser = "a";
$b = "\$looser";
echo $b;
echo PHP_EOL;

// question 10
$x = 5;
echo $x;
echo "\n";
echo $x+++$x++;
echo "\n";

/**
 * quiz 3 / Module 3
 */
echo "========== Quiz 2 ========== \n";
// question 
function fun($x,$y){
    $x = 4;
    $y = 3;
    $z = $x + $y / $y + $x;
    echo "$z";
}
fun(3,4);
echo PHP_EOL;

// question 
$numbers = array(1,2,3,4,5);
$sum = 0;
foreach($numbers as $number){
    if($number % 2 == 0){
        continue;
    }
    $sum += $number;
}
echo $sum;
echo PHP_EOL;

// question
function strFunc($str){
    if(strlen($str)==0){
        return "";
    }else{
        return strFunc(substr($str,1)). substr($str,0,1);
    }
}
echo strFunc("hello");
echo PHP_EOL;

// question
$foo = function($x) { return $x *2;};
$bar = function($x) use ($foo) {
    return $foo($x) + 1;
};
echo $bar(5);