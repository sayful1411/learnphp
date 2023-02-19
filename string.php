<?php
/**
 * Hasin hyder video resources
 * single quote, dobule quote, heredoc, nulldoc
 */

$name = "Riyad";
//$string = 'My name is {$name} \t';
$string = "My name is {$name} \t \n";
echo $string;

$heredoc = <<<EOD
data 1
data 2
name {$name} \n
EOD;
echo $heredoc;
echo PHP_EOL;

//============= ASCII code ===============
/**
 * ord() => This Function covert into code
 * chr() => This Function convert form code
 */
echo ord('A');
echo PHP_EOL;
echo chr(100);
echo PHP_EOL;
// for($i = 0;$i <128;$i++){
//     echo chr($i)." for ".ord(chr($i))."<br/>";
// }

//============== Accessing characters within a string =============
/**
 * strlen() => This Function count character of a string
 * substr() => Access any part from a string
 */

$string = "Hello World";
$length = strlen($string);
//echo substr($string,4,-3);
echo substr($string,$length-3);
echo PHP_EOL;
//echo substr($string,-3); // another way
echo substr($string,-7,3);
echo PHP_EOL;

// =================== Reversing strings
// strrev() => This function reverse every word

$length = strlen($string) - 1;
for($i = $length;$i>=0;$i--){
    echo $string[$i];
}
echo PHP_EOL;
$length = strlen($string);
for($i = 1;$i<=$length;$i++){
    echo $string[$i*-1];
}
echo PHP_EOL;
echo strrev($string);
echo PHP_EOL;

// Problem 1: olleH dlroW
$string = "Hello World";
$convert = explode(" ",$string);
print_r($convert);
function rev($value){
    return strrev($value);
}
$rev = array_map('rev',$convert);
print_r($rev);
echo implode(" ",$rev);

// ==================== Breaking Strings into Fragments - Tokenization

$string = "Hello World World, How are you?";
$parts = str_split($string);
print_r($parts);

$parts2 = strtok($string, " ,");
while($parts2 !== false){ // iterator
    echo $parts2 . "\n";
    $parts2 = strtok(" ,");
}

// ================== Searching for strings within strings
/**
 * strpos() - Find the position of the first occurrence of a substring in a string
 * stripos() - Find the position of the first occurrence of a case-insensitive substring in a string
 * strrpos() - Find the position of the last occurrence of a substring in a string
 * strripos() - Find the position of the last occurrence of a case-insensitive substring in a string
 * strrchr() - Find the last occurrence of a character in a string
 * stristr() - Case-insensitive strstr
 * substr() - Return part of a string
 */
$string = "Quick brown Fox fox jump over the lazy dog";
//$offset = strpos($string, 'fox'); // position count from start
$offset = strrpos($string, 'Quick'); // position count from end
//$offset = stripos($string, 'fox'); // position by case insensetive from start
//$offset = strripos($string, 'fox'); // position by case insensetive from end
// 0 = false
if($offset !== false){
    echo "Word was found \n";
}else{
    echo "Word was not found \n";
}
//echo $offset;

// ============== Searching and replacing strings within strings

$string = "Quick Brown brown Fox fox jump over the lazy dog";
//$string = str_replace('brown','Brown',$string,$count); // It's modify the original string
//$replaceWord = str_replace('brown','Brown',$string,$count); 
//$replaceWord = str_ireplace('brown','Brown',$string,$count); // case insensetive
$replaceWord = str_replace(['brown','fox'],['red','cat'],$string,$count); // multiple word replace
echo $replaceWord;
echo PHP_EOL;
echo "Total Replace: {$count}";
echo PHP_EOL;

// ================ Discussion of string trimming
/**
 * trim() => remove specific things both sides
 * ltrim() => remove left side only
 * rtrim() => remove right side only
 */
$string = " Hello \n,";
$string = trim($string,' ,');
echo $string;
echo 'Data';
echo PHP_EOL;

// =============== WordWrap in String
$string = "Lorem Ipsum is simply dummy text of the printing rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book";
echo wordwrap($string,30,"\n",true);
echo PHP_EOL;

// nl2br() => conver \n to <br> tag
$string = "Lorem Ipsum is simply dummy\n text of the printing rrrrr\nrrrrrrrrrrrrrrrrrrrrrrrr\nrrrrrrrrrrrrrrrrrrrrrrrr and typesetting industry. Lorem Ipsum has been\n the industry's standard dummy text ever since \nthe 1500s, when an unknown printer took a galley \nof type and scrambled it to make a type\n specimen book";
echo nl2br($string);

// =========== Using the sscanf function

$info = "Sakibul Hasan 01977978827";
$parts = sscanf($info, "%s %s %11s");
print_r($parts);

sscanf($info, "%s %s %11s", $fname, $lname, $mobile);
echo $mobile;
