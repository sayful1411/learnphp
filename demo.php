<?php

$marks = 60;
if ($marks >= 60 && $marks <= 100) {
    echo "First Division";
} elseif ($marks >= 45 && $marks < 60) {
    echo "Second Division";
} elseif ($marks >= 33 && $marks < 45) {
    echo "Third Division";
} else {
    echo "Fail";
}
echo "\n";

function has_pair_with_sum($arr, $target_sum) {
    for ($i = 0; $i < count($arr) - 1; $i++) {
        //echo $i.PHP_EOL;
        //echo $arr[$i];
        for ($j = $i + 1; $j < count($arr); $j++) {
            //echo $j.PHP_EOL;
            if ($arr[$i] + $arr[$j] == $target_sum) {
                echo $arr[$i];
                //$result = $arr[$i] + $arr[$j]; 
                //echo $result;
                return true;
            }
        }
    }
    return false;
}
function hasPairWithSum($array, $sum) {
    $num_elements = count($array);
    for ($i = 0; $i < $num_elements; $i++) {
        for ($j = $i + 1; $j < $num_elements; $j++) {
            if ($array[$i] + $array[$j] == $sum) {
                $result = $array[$i] + $array[$j];
                echo $result;
                return true;
            }
        }
    }
    return false;
}
has_pair_with_sum([5, 7, 1, 2, 8, 4, 3], 8);
echo PHP_EOL;

?>