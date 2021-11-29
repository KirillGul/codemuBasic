<meta charset="utf-8">
<?php
include 'include.php';

//166.1
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';          // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

$query = 'SELECT * FROM users';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

echo "<pre>"; print_r($data); echo "</pre>";

//166.2

echo $data[0]['name']."<br>";
echo "{$data[1]['name']} - {$data[1]['age']}<br>";
echo "{$data[1]['name']} - {$data[1]['age']} - {$data[1]['salary']}<br>";