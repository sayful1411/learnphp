<?php 
/**
 * File Methods 
 * fopen() - open file
 * fclose() - close file
 * fgets() - read/write in file
 * file() - get all file data into array
 * file_get_contents - get all file data
 * file_put_contents - put content in file
 * is_readable() - check if file readable
 * is_writable() - check if file writable
 */
// File open and read
$filename = 'D:\PHP Laravel - OSTAD\php\file\data\text.txt';
if(is_readable($filename)){
    $fp = fopen($filename, 'r');
    // read 3 character 
    //$line = fgets($fp,3);
    // read single line 
    $line = fgets($fp); 
    //echo $line;
    // read full data
    while($line = fgets($fp)){
        echo $line;
    }
    //rewind($fp); // start cursor into first  | read data again | use this function when read data again
    //fseek($fp); // start cursor at the perticular point
    fclose($fp);

    // file()
    $data = file($filename);
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    // file_get_contents()
    $data = file_get_contents($filename);
    echo $data;
    echo "<br/>";
}

