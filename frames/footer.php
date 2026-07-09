<div id="form-background" onclick="closeForm(event)"<?php if (isset($_GET["login"]) && !isset($_SESSION["user_name"])) echo 'style="display: flex;"';?>>
    <!-- Login Modal -->
    <div class="modal-content" <?php if (!isset($_GET["login"]) || isset($_SESSION["user_name"])) echo "hidden";?>>
        <h2>Вход</h2>
        <form id="login-form" method="POST">
            <input id="email-login" name="email" type="email" placeholder="denis9033@mail.ru" required>
            <input id="password-login" name="password" type="password" placeholder="Пароль" required>
            <button type="submit" class="submit-button">Войти</button>
        </form>
    </div>
    <!-- Registration Modal -->
    <div class="modal-content" hidden>
        <h2>Регистрация</h2>
        <form id="register-form" action="scripts/register.php" method="POST">
            <input name="email" type="email" oninput = "checkEmail()" id="register-email" placeholder="denis9033@mail.ru" required>
            <div class="input-hint success" id = "email-available" hidden>Email доступен</div>
            <div class="input-hint fault" id = "email-not-available" hidden>Email уже используется</div>
            <input name="name" type="text" id="register-username" oninput = "checkUserName()" placeholder="Псевдоним" required>
            <div class="input-hint success" id = "username-available" hidden>Пвсевдоним доступен</div>
            <div class="input-hint fault" id = "username-not-available" hidden>Пвсевдоним уже используется</div>
            <input name="password" id="password-input" type="password" placeholder="Пароль" oninput="checkPassword()" required>
            <input type="password" id="repeat-password-input" placeholder="Повторите пароль" oninput="checkPassword()" required>
            <div class="input-hint fault" id = "passwords-not-same" hidden>Пароли не совподают</div>
            <div id="misspasword" hidden>Пароли не совподают</div>
            <button type="submit" class="submit-button" id="register-button">Зарегистрироваться</button>
        </form>
    </div>
</div>
<footer class="footer">
        Контакты: info@laptophub.com Кузнецов Денис 3522П1ИН1
</footer>
<script src="js/formScript.js"></script>