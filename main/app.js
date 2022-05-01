let regAlert = document.querySelector('.reg_alert');
let loginAlert = document.querySelector('.login_alert');
let logOutBtn = document.getElementById('logOutBtn');


// register
$('#registrForm').submit(function (e) {
    e.preventDefault();
    // console.log( $(this).serialize() );
    let data = $(this).serializeArray();

    $.ajax({
        type: "POST",
        url: "../controller/registr.php",
        data: data,
        success: function (response) {

            if (response == 0) {
                regAlert.innerHTML = '<p class="p-2 text-success bg-light">Вы успешно зарегистрировались</p>';
                setTimeout(() => {
                    window.location.href = "../office.php";
                }, 1000);
            }
            else if (response == 1) {
                regAlert.innerHTML = '<p class="p-2 text-danger bg-light">Пароль слишком короткий, введите 4 и более знаков</p>';
            }
            else if (response == 2) {
                regAlert.textContent = 'Не зарегистрировались';
            }
        }
    });
});

// login

$('#loginForm').submit(function (e) {
    e.preventDefault();
    let data = $(this).serializeArray();

    $.ajax({
        type: "POST",
        url: "../controller/login.php",
        data: data,
        success: function (response) {
            if (response == 0) {
                loginAlert.innerHTML = '<p class="p-2 text-success bg-light">Вы успешно авторизованы</p>';
                setTimeout(() => {
                    window.location.href = "../office.php";
                }, 1000);
            }
            else if (response == 1) {
                loginAlert.innerHTML = '<p class="p-2 text-danger bg-light">Нет такого аккаунта</p>';
            }
        }
    });

})

// log out

$('#logOutBtn').on('click', function (e) {
    e.preventDefault();
    // console.log(e);
    // window.location.href = "../";


    $.ajax({
        type: "GET",
        url: "../controller/log_out.php",
        success: function (response) {
            console.log(response);
            if (response == 1) {

                window.location.href = "../";
            }
            else {
                alert('Не удалось покинуть кабинет, попробуйте позже')
            }
        }
    });
});
