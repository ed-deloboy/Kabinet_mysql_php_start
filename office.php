<?php
session_start();
if (!$_SESSION) {
    header('Location: ../');
}

$user = $_SESSION;


include('layout/office_header.php')
?>

<?php
include('layout/office_content.php')
?>

<?php
include('layout/footer.php')
?>