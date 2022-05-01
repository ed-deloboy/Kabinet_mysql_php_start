<footer class="footer">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="text-muted">© 2021 Company, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </div>
    </div>

</footer>

<!-- modal -->

<!-- modal login -->

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Авторизуйтесь</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm" action="controller/login.php" method="post">
                    <div class="mb-3">
                        <label for="mailClient" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mailClient" name="mailClienAuth">
                    </div>
                    <div class="mb-3">
                        <label for="passClient" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="passClient" name="passClienAuth">
                    </div>
                </form>
                <div class="login_alert"></div>

            </div>
            <div class="modal-footer">

                <button form="loginForm" type="submit" class="btn btn-primary">Войти</button>
            </div>
        </div>
    </div>
</div>

<!-- registr modal  -->
<div class="modal fade" id="registrModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Зарегистрируйтесь</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registrForm">
                    <div class="mb-3">
                        <label for="mailClient" class="form-label">Ваш Email</label>
                        <input type="email" class="form-control" id="mailClient" name="mailClienReg">
                    </div>
                    <div class="mb-3">
                        <label for="passClient" class="form-label">Ваш пароль</label>
                        <input type="password" class="form-control" id="passClient" name="passClienReg">
                    </div>
                </form>
                <div class="reg_alert"></div>
            </div>
            <div class="modal-footer">

                <button type="submit" class="btn btn-primary" form="registrForm">Зарегистрироваться</button>
            </div>
        </div>
    </div>
</div>


</body>

</html>