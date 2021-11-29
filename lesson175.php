<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//175.1
$query = "SELECT COUNT(*) as count FROM users WHERE salary=400";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$data = mysqli_fetch_assoc($result);
echo "<pre>"; print_r($data); echo "</pre>";

//175.2
$query = "SELECT COUNT(*) as count FROM users WHERE salary=500 AND age=23";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$data = mysqli_fetch_assoc($result);
echo "<pre>"; print_r($data); echo "</pre>";