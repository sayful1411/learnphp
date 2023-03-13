<?php 
// set cookie
setcookie('username','sayful',time()+60);
// unset cookie
setcookie('username','sayful',1);
// set cookie in specific folder
setcookie('email','sayful@gmail.com',time()+60,'/session');
// execute
if(isset($_COOKIE['username'])){
    echo $_COOKIE['username'];
}