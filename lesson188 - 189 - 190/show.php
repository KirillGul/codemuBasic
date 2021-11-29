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

$query = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$user = mysqli_fetch_assoc($result);
?>
<div>
	<p>
		имя: <span class="name"><?= $user['name']?></span>
	</p>
	<p>
		возраст: <span class="age"><?= $user['age']?></span>,
		зарплата: <span class="salary"><?= $user['salary']?>$</span>,
	</p>
</div>