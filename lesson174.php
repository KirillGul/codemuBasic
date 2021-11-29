<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//174.1
$query = "SELECT * FROM users LIMIT 2";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//174.2
$query = "SELECT * FROM users LIMIT 2,3";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//174.3
$query = "SELECT * FROM users ORDER BY salary LIMIT 3";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//174.4
$query = "SELECT * FROM users ORDER BY salary DESC LIMIT 3";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";