/*
 *  Author: Airat Sirazov
 *  Version 1.0
 *
 */

// При кликании на кнопку Войти
$(".btn").click(function () {
    var error;
    var data = {
        email: null,
        password: null
    };

    var email = $("#email").val();
    var password = $("#password").val();
    var pswrd_repeat = $(".pswrd_repeat").val();

    if ($(".btn").attr("name") === 'login') {
        if (!empty(email)) {
            data.email = email;
        } else {
            error += "Вы не ввели email";
        }

        if (!empty(password)) {
            data.password = password;
        } else {
            error += "Вы не ввели пароль";
        }

        showError(error);
        return false;
    }

    if ($(".btn").attr("name") === 'next') {
        /*if (!empty(email)) {
            data.email = email;
        } else {
            error += "Вы не ввели email";
        }

        if (!empty(password)) {
            data.password = password;
        } else {
            error += "Вы не ввели пароль";
        }

        if (empty(pswrd_repeat)) {
            error += "Повторите пароль";
        }

        if (password !== pswrd_repeat) {
            error += "Пароли не совпадают";
        }

        showError(error);
        return false;*/

        $(".form").css("display", "none");
        $(".hidden_regist, .confirm").css("display", "block");
    }

    if (!empty(error)) {
        // Отправляем аякс запрос

    }
});

$(".confirm").click(function () {
    if ($(".confirm").attr("name") === 'confirm') {

    }

    if ($(".confirm").attr("name") === 'send') {

    }

    var code = $(".hidden_regist").val();
    if (!empty(code)) {
        // Отправляем ajax запрос на сервер для проверки кода потверждения
        alert("hello");
    } else {
        error += "Вы не ввели код";
    }
});

/*
 * Кнопка регистрации когда открыта форма войти
 * При кликании на этой кнопки форма войти поменяется на регистрацию
 */
$("#regist").click(function () {
    $(".pswrd_repeat").css("display", "block");
    $(".btn").text("Далее").attr("name", "next");
    $("#login_down").css("display", "none");
});

// Когда нажимаем Забыли пароль?
$("#forget").click(function () {
    // Показываем форму ввода email
    $(".form, #regist, #forget").css("display", "none");
    $(".hidden_regist").attr("placeholder", "Ваш email");
    $(".confirm").text("Отправить").attr("name", "send");
    $(".hidden_regist, .confirm").css("display", "block");
});
