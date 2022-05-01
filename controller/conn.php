<?php
$salt = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPLKJHGFDSZXCVBNM123456789";

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DB_NAME', 'lich_kabinet_test');

$conn = mysqli_connect(HOST,USER,PASS,DB_NAME);

// if($conn){
//     echo 'very good';
// }
// else{
//     echo 'bad conn';
// }