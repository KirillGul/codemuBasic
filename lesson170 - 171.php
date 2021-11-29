<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//170.1
$query = "INSERT INTO users (name, age, salary) VALUES ('user7', 26, 300)";
//mysqli_query($link, $query) or die(mysqli_error($link));

//171.1
$query = "UPDATE users SET age=35 WHERE id=4";
//mysqli_query($link, $query) or die(mysqli_error($link));

//171.2
$query = "UPDATE users SET age=23 WHERE id>=2 AND id<=5";
mysqli_query($link, $query) or die(mysqli_error($link));