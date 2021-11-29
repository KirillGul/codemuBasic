<meta charset="utf-8">
<?php
include 'include.php';


$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';          // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//169.1
$query = 'SELECT name, age, salary FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//169.2
$query = 'SELECT name FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";