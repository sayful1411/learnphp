<?php 
session_name('myapp');
session_start([
    'cookie_lifetime' => 60
]);
$_SESSION['name'] = "Sayful";
echo $_SESSION['name'];

// cookie
if(isset($_COOKIE['email'])){
    echo $_COOKIE['email'];
}
//session_destroy();