<?php
$n = 10;
if($n % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}

echo PHP_EOL;

// Alternative way
if ($n % 2 == 0):
    echo "Even Number";
else:
    echo "Odd Number";
endif;  

echo PHP_EOL;

switch ($n % 2):
    case 0:
        echo "Even Number";
        break;
    default:
        echo "Odd Number";
endswitch;

echo PHP_EOL;

$num = -11;
echo $result = ($num > 0) ? 'positive' : (($num < 0) ? (($num < -10) ? 'value is below -10' : 'negative') : 'its zero');