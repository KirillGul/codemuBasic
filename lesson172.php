<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//172.1
$query = "DELETE FROM users WHERE id=7";
//mysqli_query($link, $query) or die(mysqli_error($link));

//172.2
$query = "DELETE FROM users WHERE age=23";
//mysqli_query($link, $query) or die(mysqli_error($link));

//172.3
$query = "DELETE FROM users";
mysqli_query($link, $query) or die(mysqli_error($link));