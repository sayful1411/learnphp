<?php 
$filename = 'D:\PHP Laravel - OSTAD\php\file\data\text3.txt';
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

// Write data in txt file
// $fp = fopen($filename,'w');
// foreach($students as $student){
//     $data = sprintf("%s,%s,%s,%s,%s \n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
//     fwrite($fp,$data);
// }
// fclose($fp);

// Write data in txt file - Diffrent way
// $fp = fopen($filename,'w');
// foreach($students as $student){
//     fputcsv($fp,$student);
// }
// fclose($fp);

// Read data from txt file
// $fp = fopen($filename,'r');
// while($data = fgets($fp)){
//     $student = explode(',',$data);
//     printf("Name = %s %s <br/> Age = %s <br/> Class = %s <br/> Roll = %s <br/><br/>",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);

// Read data from txt file - diffrent way
// $fp = fopen($filename,'r');
// while($student = fgetcsv($fp)){
//     printf("Name = %s %s <br/> Age = %s <br/> Class = %s <br/> Roll = %s <br/><br/>",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);

// add new data
$student = array(
    'fname' => 'Miss',
    'lname' => 'Lamia',
    'age' => 10,
    'class' => 6,
    'roll' => 01,
);
$fp = fopen($filename,'a');
fputcsv($fp,$student);
fclose($fp);

// delete a data
$data = file($filename);
print_r($data);
unset($data[2]);
$fp = fopen($filename,'w');
foreach($data as $line){
    fwrite($fp,$line);
}
fclose($fp);