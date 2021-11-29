<meta charset="utf-8">
<?php
include '../include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

$id = $_GET['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

$query = "UPDATE users SET name='$name', age='$age', salary='$salary' WHERE id=$id";
mysqli_query($link, $query) or die(mysqli_error($link));

echo 'юзер успешно изменен!';