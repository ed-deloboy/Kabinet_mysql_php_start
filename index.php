<?php
include('layout/header.php');
?>
<section>
    <div class="container col-6 mx-auto">

        <?php
        if ($_SESSION) {
            echo '<h1>'.$_SESSION['email'].' - участник лучшей конторы</h1>';
        } else {
            echo '<h1>Самая лучшая кантора приветствует вас</h1>';
        }

        ?>
        <p>Зарегистрируйтесь / авторизуйтесь, чтобы начать пользоваться</p>
        <div class="mt-5 mb-5">
            <button type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Вход</button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrModal">Регистрация</button>
        </div>
    </div>
</section>
<?php
include('layout/footer.php');
?>