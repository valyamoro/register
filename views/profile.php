<?php

session_start();

if (!$_SESSION['user']) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    <ul>
        <li><a href="../index.php">Хоум</a></li>
        <li><a href="login.php">Логинизация</a></li>
        <li><a href="registry.php">Регистринизация</a></li>
        <li style="float:right"><a class="active" href="../src/models/logout_handler.php">Выход</a></li>
    </ul>
</body>
<body>
<form>
    <a href="#"><?= $_SESSION['user']['username'] ?></a>
    <a href="#"><?= $_SESSION['user']['phone'] ?></a>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <img width="200" height="200" src="<?= $_SESSION['user']['avatar']?>" alt="">
</form>
</body>
</html>