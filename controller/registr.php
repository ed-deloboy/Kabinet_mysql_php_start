<?php
session_start();
require_once 'conn.php';

$email = mb_strtolower(trim($_POST['mailClienReg']));
$pass = trim($_POST['passClienReg']);
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
$hash = md5(md5($email . time()));
// echo '<pre>';

// print_r($pass_hash);

if (strlen($pass) < 4) {
    echo 1;
    exit;
} else {
    mysqli_query($conn, "INSERT INTO `user` (`id`, `email`, `pass`, `hash`) VALUES (NULL, '$email', '$pass_hash', '$hash')");
    $db_users = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email'");
    $user = mysqli_fetch_assoc($db_users);
    $user_hash_pass = $user['pass'];
    $_SESSION = $user;
    echo 0;
}
