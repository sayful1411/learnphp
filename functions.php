<?php
/**
 * Even or Odd calculation function
 */
function isEven($n) // parameter
{
    if($n % 2 == 0){
        return true;
    }
    return false;
}

/**
 * Calculate Factorial number
 * Type Hinting for parameter
 * Type Hinting for return type
 */
function factorial(int $n){ // type hinting for parameter
    /*
    *   use older php version
        if(gettype($n) != 'integer'){
            return "Invalid";
        }
    */
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result *= $i;
    }
    return $result;
}
function sum($x,$y,$z):int{ // type hinting for return type
    return $x+$y+$z;
}

/**
 * set default value
 * Call a robot to serve food
 * must use a default value for last parameter if you use a default value for first parameter
 */
function serve($food = "Coffee", $items = "1 cup"){
    echo "{$items} of {$food} has/have been served";
}

/**
 * Grading system 
 */
function result($marks){
    if($marks >= 80 && $marks <= 100){
        $grade = "A+";
        $gradePoint = 4.00;
        $remarks = "First Class";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }elseif($marks >= 75 && $marks < 80){
        $grade = "A";
        $gradePoint = 3.75;
        $remarks = "First Class";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }elseif($marks >= 70 && $marks < 75){
        $grade = "A-";
        $gradePoint = 3.50;
        $remarks = "First Class";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }elseif($marks >= 65 && $marks < 70){
        $grade = "B+";
        $gradePoint = 3.25;
        $remarks = "First Class";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }elseif($marks >= 60 && $marks < 65){
        $grade = "B";
        $gradePoint = 3.00;
        $remarks = "First Class";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }elseif($marks >= 55 && $marks < 60){
        $grade = "B-";
        $gradePoint = 2.75;
        $remarks = "Second Class";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }elseif($marks >= 50 && $marks < 55){
        $grade = "C+";
        $gradePoint = 2.50;
        $remarks = "Second Class";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }elseif($marks >= 45 && $marks < 50){
        $grade = "C";
        $gradePoint = 2.25;
        $remarks = "Second Class";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }elseif($marks >= 40 && $marks < 45){
        $grade = "D";
        $gradePoint = 2.00;
        $remarks = "Third Class";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }elseif($marks >= 0 && $marks < 40){
        $grade = "F";
        $gradePoint = 0.00;
        $remarks = "Fail";
        $result = "Grade: {$grade} | Grade Point: {$gradePoint} | Remarks: {$remarks}";
        return $result;
    }else{
        return "Invalid Number";
    }
}

/**
 * unlimited parameter
 */
function unlimitedSum(int ...$numbers):int {
    $result = 0;
    for($i=0;$i<count($numbers);$i++){
        $result += $numbers[$i];
    }
    return $result;
}

/**
 * Dividing a large function into smaller functions
 */

 function doTaskA(){
    echo "Task A done \n";
 }
 function doTaskB(){
    echo "Task B done \n";
 }
 function doTaskC(){
    echo "Task C done \n";
 }
 function doTaskD(){
    echo "Task D done \n";
 }

 function doLargerTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
 }

 /**
  * Recursive Function
  * Recursion
  */

  function printNumber($counter,$end,$steping = 1){
    if($counter  > $end){
        return;
    }
    echo $counter."\n";
    $counter += $steping;
    printNumber($counter,$end,$steping);
  }

/**
 * Printing Fibonacci Series Using Recursive Functions
 */
function fibonacci($old, $new, $end){
    static $start;
    $start = $start ?? 1;

    if($start > $end){
        return;
    }
    $start++;

    echo $old . " ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}

/**
 * Variable Scope in PHP Function
 */

 $name = "Earth"; // Global Scope
 function doSomething(){
    // $name = "Earth"; // Local Scope
    //global $name;
    //echo $name;
    
    echo $GLOBALS['name'];
 }

 function doExtra(){
    static $i; // static scope
    $i = $i ?? 0;
    $i++;
    echo $i . "\n";
 }

 /**
 * Call Variable Scope
 */
doSomething();
echo $name;
echo PHP_EOL;
doExtra();
doExtra();
doExtra();
doExtra();

function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
}
test();