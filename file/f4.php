<?php 
$filename = 'D:\PHP Laravel - OSTAD\php\file\data\text4.txt';
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
// add new data
$student = array(
    'fname' => 'Miss',
    'lname' => 'Lamia',
    'age' => 10,
    'class' => 6,
    'roll' => 01,
);

// write data in serialize format
// $data = serialize($students);
// file_put_contents($filename,$data,LOCK_EX);

// read data from serialize format
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
echo "<pre>";
print_r($allStudents);
echo "</pre>";

// add data
// array_push($allStudents,$student);
// $data = serialize($allStudents);
// file_put_contents($filename,$data,LOCK_EX);

