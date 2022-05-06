<?php

session_start();

?>

<div class="office__container row">
    <div class="office__sidebar-menu col-lg-3">
        <!-- avatar container -->
        <div class="office__avatar-container container">
            <a href="#" class="office__avatar-link">
                <img src="" alt="<?= $user['email'] ?>">
            </a>
            <p>Здравтвуйте <?= $user['email'] ?></p>
        </div>
        <!-- menu container -->
        <ul class="list-group p-3">
            <li class="list-group-item active">
                <div>
                    <span>Аккаунт</span>
                </div>
            </li>
            <li class="list-group-item">
                <div>
                    <span>Товары</span>
                </div>
            </li>
        </ul>
    </div>

    <section class="col-9">
        <div class="pr-3">
            Здравтвуйте <?= $user['email'] ?>
        </div>
    </section>
</div>