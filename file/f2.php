<?php 
// file open and write
$filename = 'D:\PHP Laravel - OSTAD\php\file\data\text2.txt';
if(is_writable($filename)){
    //$existingData = file_get_contents($filename); // if you want to stay previous data then call it
    $fp = fopen($filename, 'w'); // 2nd param "w" means previous data will remove
    //$fp = fopen($filename, 'a'); // 2nd param "a" means previous data won't remove
    //fwrite($fp,$existingData);
    fwrite($fp,"Web Development \n");
    fwrite($fp,"Web Design \n");
    fclose($fp);
}
file_put_contents($filename,"Data Entry \n", FILE_APPEND | LOCK_EX);
file_put_contents($filename,"Video Editing \n", FILE_APPEND | LOCK_EX);
