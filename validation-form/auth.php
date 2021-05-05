<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass . "a1b2c3z9y8x7");

$mysql = new mysqli('localhost', 'root', '', 'testsite3_bd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

$user = $result->fetch_assoc();

if (count((array)$user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: ../index.php');
