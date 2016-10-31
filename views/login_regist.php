<div id="login-regist">
    <input id="email" class="form" type="text" placeholder="Ваш email">
    <input id="password" class="form" type="password" placeholder="Пароль">
    <input class="form pswrd_repeat" type="password" name="password" placeholder="Повторите пароль">
    <div class="form btn" name="login">Войти</div>

    <!-- Форма потверждения email -->
    <input class="form hidden_regist" type="text" name="email_confirm" placeholder="Код потверждения">
    <div class="form confirm" name="confirm">Потвердить</div>
    <!-- Конец потверждения -->

    <div id="login_down">
        <span id="forget">Забыли пароль?</span><div id="regist">Регистрация</div>
    </div>
    <script src="<?php echo $siteUrl.'/public/js/login_regist.js'?>"></script>
    <script src="<?php echo $siteUrl.'/public/js/animation_login_regist.js'?>"></script>
</div>