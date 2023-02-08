<?php
$n = 1212;
$o = 0123; // first 0 means its octal number
$h = 0x2B; // first 0x means its hexadecimal number

printf("The number is %d and %d and %d \n",$n,$o,$h); // %d means decimal
printf("The binary equivalent of %d is %b \n",$n,$n); // %b means binary
printf("The hexadecimal equivalent of %d is %x \n",$n,$n); // %x means hexadecimal
printf("The hexadecimal equivalent of %d is %X \n",$n,$n); // %X means capital hexadecimal
printf("The octal equivalent of %d is %o \n",$n,$n); // %o means octal
echo "\n";
/**Best Practice */
printf('The hexadecimal equivalent of %1$d is %1$X',1015);
echo "\n";
// The magic of printf
$fname = 'Sakib';
$lname = 'Al Hasan';
$output = sprintf('Number 1 Allrounder %s %s',$fname,$lname); // sprinf return value and assign into a variable
echo $output;
echo "\n";

// %2$s second value, %1$s first value
printf('Number 1 Allrounder %2$s %1$s',$fname,$lname);
echo "\n";

$a = 49.988;
printf("%.2f \n",$a); // %.2f gives 2 number after decimal(.)

$m = 123;
$n = 27;
printf("%04d \n",$m); // %04d gives total 4number. example: 12 = 0012
printf("%04d \n",$n);

$x = 254.5587;
$y = 12.45;
printf("%08.2f \n",$x);
printf("%08.2f \n",$y);