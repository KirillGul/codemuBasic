<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//173.1
$query = "SELECT * FROM users ORDER BY salary";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//173.2
$query = "SELECT * FROM users ORDER BY salary DESC";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//173.3
$query = "SELECT * FROM users ORDER BY name";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//173.4
$query = "SELECT * FROM users WHERE salary=500 ORDER BY age";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//173.5
$query = "SELECT * FROM users ORDER BY name, salary";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";