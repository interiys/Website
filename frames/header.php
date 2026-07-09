<?php
if (!isset($sql)) require "scripts/db.php"
?>

<div id="header">
    <div id="logos">
        <img src="logo/logo.png" alt="" id="left-logo">
        <span id="general-name">LaptopHub</span>
        <span>
            <?php
                if (isset($_SESSION["user_name"])){
            ?>
            <a href="user.php"><img src="logo/User.png" alt="" id="user-logo"></a>
            <?php
                } else {
            ?>
            <span id="log-buttons"><button onclick="openLoginForm()">Вход</button><button onclick="openRegisterForm()">Регистрация</button></span>
            <?php
                }
            ?>
        </span>
    </div>
    <div id="nav-menu">
        <span><a href="index.php">Главная</a></span>
        <span>
            <a>Продукты</a>
            <a href="Catalog.php">Ноутбуки</a>
        </span>
        <span><a href="Blog.php">Блог</a></span>
        <span><a href="support.php">Поддержка</a></span>
    </div>
    <script src="js/createMenu.js"></script>
</div>