<!DOCTYPE html>
<html>

<?php
$pageTitle = "Пользователь";
require "frames/head.php";
?>

<body>
<?php
require "frames/header.php";
?>

<div id="main-content">
    <div class="content">
        <?php if (isset($_SESSION["user_name"])){?>
        <ul>
            <li>Имя: <?php echo $_SESSION['user_name'];?></li>
            <li>Почта: <?php echo $_SESSION['user_email'];?></li>
        </ul>
        <button class="exit_button" onclick = "logout()">Выход</button>
        <?php }?>
        <script>
            function logout(){
                let xhr = new XMLHttpRequest();
                let url = "scripts/exit.php";
                xhr.open("POST", url, true);
                xhr.setRequestHeader("Content-Type", "application/json");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        document.location.href = document.location.href
                    } else if (xhr.readyState === 4) {
                        console.error("Ошибка:", xhr.responseText);
                    }
                };
                xhr.send();
        }
        </script>
    </div>
</div>
<?php
require "frames/footer.php";
?>
</body>
</html>