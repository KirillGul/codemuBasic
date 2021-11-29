<meta charset="utf-8">
<?php
include 'include.php';


$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';          // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//168.1
$query = 'SELECT * FROM users WHERE age>25 AND age<=28';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//168.2
$query = 'SELECT * FROM users WHERE name="user1"';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//168.3
$query = 'SELECT * FROM users WHERE name="user1" OR name="user2"';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//168.4
$query = 'SELECT * FROM users WHERE name!="user3"';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//168.5
$query = 'SELECT * FROM users WHERE age=27 OR salary=1000';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//168.6
$query = 'SELECT * FROM users WHERE age=27 OR salary!=400';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//168.7
$query = 'SELECT * FROM users WHERE (age>=23 AND age<27) OR salary!=400';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";

//168.8
$query = 'SELECT * FROM users WHERE (age>=23 AND age<=27) OR (salary=400 AND salary=1000)';
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
echo "<pre>"; print_r($data); echo "</pre>";