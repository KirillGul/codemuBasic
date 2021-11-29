<?php
session_start();

if (!empty($_SESSION['auth']) and $_SESSION['status'] === 'admin') {

    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = 'root';      // пароль
    $name = 'mydb';      // имя базы данных
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

    $id = $_GET['id']; // id юзера из сессии

    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user['status_id'] == '2') {
        $query = "UPDATE users SET status_id='1' WHERE id='$id'";
    } else {
        $query = "UPDATE users SET status_id='2' WHERE id='$id'";
    }
    mysqli_query($link, $query);
    header('Location:admin.php');

} else {
    echo "Авторизируйтесь как админ.<br>";
}