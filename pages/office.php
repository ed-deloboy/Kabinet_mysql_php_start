<?php
session_start();

if(!$_SESSION){
header('Location: ../');

}

$user = $_SESSION;

include('../layout/office_header.php')
?>


<section>
    <div class="container">
        Здравтвуйте <?= $user['email'] ?>
    </div>
</section>

