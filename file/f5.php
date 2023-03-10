<?php 
$filename = 'D:\PHP Laravel - OSTAD\php\file\data\text5.txt';
$students = array(
    array(
        'fname' => 'Sakibul',
        'lname' => 'Hasan',
        'age' => 14,
        'class' => 8,
        'roll' => 15,
    ),
    array(
        'fname' => 'Ali',
        'lname' => 'Hasan',
        'age' => 19,
        'class' => 12,
        'roll' => 1502,
    ),
    array(
        'fname' => 'Riyad',
        'lname' => 'Hosen',
        'age' => 18,
        'class' => 11,
        'roll' => 1201,
    ),
);
// write data in json format
// $encodedData = json_encode($students);
// file_put_contents($filename,$encodedData,LOCK_EX);

// read data from json format
$data = file_get_contents($filename);
$allStudents = json_decode($data,true); // if true data will be array format else object
echo "<pre>";
print_r($allStudents);
echo "</pre>";

