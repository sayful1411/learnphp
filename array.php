<?php
/*
* array
* another syntax for array
$students = [
    "Sayful",
    "Sakibul",
    "Hasan",
    "Riyad"
];
*/

$students = array(
    "Sayful",
    "Sakibul",
    "Hasan",
    "Riyad",
    123
);
// output
//echo $students[0];
$students[4] = "Lamia"; //reassign
// print all data
$n = count($students);
for($i = 0; $i < $n; $i++){
    echo $students[$i]."<br/>";
}

echo "===== Reverse ===== <br/>";

for($i = $n - 1; $i >= 0; $i--){
    echo $students[$i]."<br/>";
}

echo "===== Remove Data ===== <br/>";

/**
 * array_shift() out first data from an array
 * array_pop() out last data from an array
 * array_push() insert data into last position
 * array_unshift() insert data into first positon
 */
//$student = array_shift($students);
$student = array_pop($students);
echo $student . "<br/>";

echo "===== Insert Data ===== <br/>";

$students[] = "Sumaiya"; // another way
array_push($students,"Soha");
array_unshift($students, "Tahia");

$n = count($students);
for($i = 0; $i < $n; $i++){
    echo $students[$i]."<br/>";
}

echo "===== Associative  array ===== <br/>";

$students = [
    "Hasan" => "50, 60, 70",
    "Sakibul" => "55, 65, 75",
    "Riyad" => "40, 30, 20"
];

//echo $students[10];

foreach($students as $key => $value){
    echo "Name: ".$key. ", Marks = " .$value. "<br/>";
}

//$keys = array_keys($students);
$values = array_values($students);
echo "<pre>";
print_r($values);
echo "</pre>";

echo "===== string to array | array to string ===== <br/>";

// delimeter string to array
$fruits = explode(", ","Mango, Apple, Banana, Orange,Watermelon, Cherry");
//$fruits = preg_split('/(, |,)/','Mango, Apple, Banana, Orange,Watermelon, Cherry');
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo count($fruits);
echo "<br/>";
// delimeter or array to string
$fruitsString = join(", ",$fruits);
echo $fruitsString;
echo "<br/>";

echo "===== Multidimensional or nested arrays ===== <br/>";

$foods = array(
    'vegitables' => [
        'Tomato','Potato','Carrot','Brocolli'
    ],
    'fruits' => [
        'Mango','Orange','Banana'
    ],
    'drinks' => [
        'Water','Milk'
    ]
);
$foods['drinks']['Juice'] = 'Mango';
echo "<pre>";
print_r($foods);
echo "</pre>";

echo "===== Associative Array to String Conversion - Serialize, json ===== <br/>";

$student = [
    'fname' => 'Sakibul',
    'lname' => 'Hasan',
    'age' => 13,
    'class' => 8,
    'Section' => 'B'
];
echo "<pre>";
print_r($student);
echo "</pre>";

printf("%s %s <br/>",$student['fname'],$student['lname']);

// for storing data. you need to convert array into string
$serialize = serialize($student);
echo $serialize;
echo "<br/>";

$newStudent = unserialize($serialize);
echo "<pre>";
print_r($newStudent);
echo "</pre>";

$jsonData = json_encode($newStudent);
echo $jsonData;

$newStudent2 = json_decode($jsonData,true);
echo "<pre>";
print_r($newStudent2);
echo "</pre>";

echo "===== Copy by Value and Copy by Reference ===== <br/>";

$person = array('fname'=>'Hello','lname'=>'World');
$newPerson = $person; // copy by value
// $newPerson = &$person; // copy by reference
$newPerson['lname'] = 'Earth';
echo "<pre>";
print_r($person);
print_r($newPerson);
echo "</pre>";

echo "===== Removing data from associative arrays ===== <br/>";

$person = array('fname'=>'Hello','lname'=>'World');
unset($person['lname']);
echo "<pre>";
print_r($person);
echo "</pre>";

echo "===== Extracting some data from an array while keeping the original array intact ===== <br/>";

/**
 * index start 0 
 * last index start -1
 * true return original key 
 * array_slice() do not modify original array
 */
$fruits = ['apple','mango','orange','banana','Grape','Strawberry'];
echo "<pre>";
print_r(array_slice($fruits,2,-1,true));
echo "</pre>";

echo "=====  Decluttering an array ===== <br/>";

/**
 * array_slice() do not modify original array
 * array_slice() takes an array into last parameter
 */
$fruits = ['apple','mango','orange','banana','Grape','Strawberry'];
$newFruits = array("jackfruit","Cherry"); // new array
echo "<pre>";
print_r(array_splice($fruits,2,-1,$newFruits)); // new array insert
print_r($fruits);
echo "</pre>";

echo "=====  Concatenating several arrays ===== <br/>";

$fruits = ['apple','mango','orange','banana','Grape','Strawberry'];
$random = ['a'=>12,'b'=>24,'c'=>35,'d'=>74,'e'=>99, 'f'=>45, 12=>21, 'g'=>81];

$newFruits1 = array_slice($fruits,0,3);
$newFruits2 = array_slice($fruits,4,null,true); // here

$newFruits = array_merge($newFruits1,$newFruits2);
$newFruitsPlus = $newFruits1 + $newFruits2; // key true must
echo "<pre>";
print_r($newFruits1);
print_r($newFruits2);
print_r($newFruits);
print_r($newFruitsPlus);
echo "</pre>";

// or
$r1 = array_slice($random,0,2,true);
$r2 = array_slice($random,4,null,true);
$r3 = array('s'=>32,'h'=>55);

$randomData = array_splice($random,2,2,array('i'=>43,'j'=>66)); // wrong way
$randomCurrectWay = $r1+$r2+$r3;

echo "<pre>";
print_r($randomData);
print_r($random);
print_r($randomCurrectWay);
echo "</pre>";

echo "=====  Sorting Indexed and Associated Arrays ===== <br/>";

/**
 * SORT_STRING sorting as string
 * SORT_FLAG_CASE sorting as case insensetive
 */

$fruits = ['apple','mango','orange','banana','Grape','Strawberry'];
$random = ['a'=>12,'b'=>24,'c'=>35,'d'=>74,'e'=>99, 'f'=>45, 12=>12, 'g'=>81];

// sort($fruits,SORT_STRING | SORT_FLAG_CASE);
// rsort($fruits,SORT_STRING | SORT_FLAG_CASE);
// asort($random);
// arsort($random);
// ksort($random);
krsort($random);
echo "<pre>";
//print_r($fruits);
print_r($random);
echo "</pre>";

echo "=====  Searching in Indexed and Associated Arrays ===== <br/>";


// in_array()
if(in_array('apple',$fruits)){
    echo "apple is found <br/>";
}
// key_exists()
if(key_exists(12,$random)){
    echo "a is found <br/>";
}
//array_search()
$ofset = array_search(12,$random);
echo $ofset . "<br/>";

echo "=====  Difference and intersection of two indexed and Associated Arrays ===== <br/>";

$number1 = array(1,2,4,6,8,10);
$number2 = array(1,3,4,7,8,11);
$fruits1 = array('a'=>'apple','c'=>'banana','l'=>'cherry','j'=>'jackfruit');
$fruits2 = array('l'=>'luccy','c'=>'banana','s'=>'strawberry','b'=>'banana');
/**
 * array_intersect()
 * array_intersect_assoc() // check key and value
 * array_diff()
 * array_diff_assoc() // check key and value
 */
$common = array_intersect($number1,$number2);
//$commonF = array_intersect($fruits1,$fruits2);
$commonF = array_intersect_assoc($fruits1,$fruits2);

echo "<pre>";
print_r($common);
print_r($commonF);
echo "</pre>";

$diff = array_diff($number1,$number2);
//$commonF = array_diff($fruits1,$fruits2);
$diffF = array_diff_assoc($fruits1,$fruits2);

echo "<pre>";
print_r($diff);
print_r($diffF);
echo "</pre>";

echo "========== Array Utility Functions ========== <br/>";

/**
 * array_walk()
 * array_map()
 * this 2 function do no change main array. but 2nd func return a copy of array
 */

$num = [1,2,3,4,5,6,7,8,9,10];
function square($n){
    //printf("Square of %d is %d <br/>",$n,$n*$n);
    return $n*$n;
}
function isEven($n){
    return $n%2==0;
}
//array_walk($num,'square');
//$newNum = array_map('square',$num);
$newNum = array_filter($num,'isEven');
echo "<pre>";
print_r($num);
print_r($newNum);
echo "</pre>";
// array_reduce() reduce all data
function sum($oldValue,$newValue){
    return $oldValue+$newValue;
}
$sum = array_reduce($num,'sum');
echo $sum;
echo "<br/>";

echo "========== list function to get data from an array ========== <br/>";

$color = [122,233,65];
list($red,$green,$blue) = $color;
echo $red;
echo "<br/>";

foreach(range(0,60,11) as $number){
    if($number > 0){
        echo $number . "<br/>";
    }
}

$numbers = range(40,80);
$rand = mt_rand(0,40);
$luck = $numbers[$rand];
if($luck % 2 == 0){
    echo "Head";
}else{
    echo "Tail";
}

shuffle($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";

$fruits = array('a'=>'apple','c'=>'banana','l'=>'cherry','j'=>'jackfruit');
$key = array_rand($fruits);
//echo $key;
echo $fruits[$key];

