<?php
/**Loops
 * while loop
 * do while loop
 * for loop
 * foreach loop
 */

//  while loop
$i = 0;
while($i<=10){
    echo "The Number is {$i}\n";
    //$i++;
    $i+=2;
}
echo "=========\n";

// do while
$i = 0;
do{
    $i++;
    echo $i.PHP_EOL;
}while($i<10);
echo "=========\n";

// for loop
for($i=0;$i<=10;$i+=1){
    echo $i;
    echo PHP_EOL;
    // for($j=1;$j<$i;$j++){
    //     echo '*';
    // }
}
/*
// multi steping
for($i=10,$j=1;$i>0;$i--,$j++){
    //echo $i.":".(11-$i);
    echo $i.":".$j;
    echo PHP_EOL;
}

for($i=0,$j=0;$i<100;$i+=7,$j+=11){
    echo $i."\n";
    echo $j < 100 ? $j."\n":"";
}
*/
echo "=========\n";
// Break and Continue
for($i=1;$i<=10;$i++){
    if($i>5){
        break;
    }
    echo $i;
    echo PHP_EOL;
}
echo "=========\n";
for($i=1;$i<=10;$i++){
    if($i==5){
        continue;
    }
    echo $i;
    echo PHP_EOL;
}