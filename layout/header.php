<?php
session_start();
// session_destroy();

// routing


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script defer src="main/app.js"></script>
    <?php
    if ($_SESSION) {
        echo ' <title>Вы партнер нашей конторы</title>';
    } else {
        echo ' <title>Клевая контора</title>';
    }
    ?>
    <title>Клевая контора</title>
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 link-secondary">Главная</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">О нас</a></li>

                    <?php
                    if ($_SESSION) {
                        echo '<li><a href="/office.php" class="nav-link px-2 link-dark">Офис</a></li>';
                    } else {
                        echo '<li><a href="/office.php" class="nav-link px-2 link-dark" data-bs-toggle="modal" data-bs-target="#registrModal">Регистрация</a></li>';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </header>