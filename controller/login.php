<?php
session_start();
require_once 'conn.php';
// echo "<pre>";

$email = mb_strtolower(trim($_POST['mailClienAuth']));
$pass = trim($_POST['passClienAuth']);

$db_users = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email'");
$user = mysqli_fetch_assoc($db_users);
$user_hash_pass = $user['pass'];
// echo '<br>';
if (password_verify($pass, $user_hash_pass) and $user['email'] == $email) {
    $_SESSION = $user;
    echo 0;
    // exit;
} else {
    echo 1;
}
