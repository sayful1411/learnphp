<?php 
date_default_timezone_set("Asia/Dhaka");

//echo time();
//echo microtime(true);
// show 8 number after (.) decimal
$mt = microtime(true);
//printf("%10.8f",$mt);

// how take time to calculate factorial
$startTime = microtime(true);
factorial(100);
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
//printf("%10.8f",$executionTime) . "\n";

function factorial($n){
    $result = 1;
    for($i = 1; $i <= $n; $i++){
        $result *= $i;
    }
    return $result;
}

// mktime()
// echo time() . "\n";
// echo mktime(0,0,0,03,10,23);

// time diffrence
//echo (mktime(0,0,0,3,10,23)-mktime(0,0,0,8,12,98))/(24*60*60);

echo strtotime("10 March, 2023") . "\n";
echo strtotime("now") . "\n";
echo strtotime("+3days") . "\n";
echo date('d-M-Y',strtotime("now"));