<meta charset="utf-8">
<?php
include 'include.php';


$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';          // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//167.1
$query = 'SELECT * FROM users WHERE id=3';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//167.2
$query = 'SELECT * FROM users WHERE salary=900';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//167.3
$query = 'SELECT * FROM users WHERE age=23';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//167.4
$query = 'SELECT * FROM users WHERE salary>400';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//167.5
$query = 'SELECT * FROM users WHERE salary>=500';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//167.6
$query = 'SELECT * FROM users WHERE salary!=500';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//167.7
$query = 'SELECT * FROM users WHERE salary<=500';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";