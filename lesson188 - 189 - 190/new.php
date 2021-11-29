<meta charset="utf-8">
<?php
include '../include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

if (!empty($_POST)) {
    $name = $_POST['name'];
	$age = $_POST['age'];
	$salary = $_POST['salary'];

    $query = "INSERT INTO users SET name='$name', age='$age', salary='$salary'";
    mysqli_query($link, $query) or die(mysqli_error($link));
}

?>
<form action="" method="POST">
	Имя: <input name="name" <?php if (!empty($_POST['name'])) echo "value=\"".$_POST['name']."\"";?>><br>
	Возраст: <input name="age" <?php if (!empty($_POST['age'])) echo "value=\"".$_POST['age']."\"";?>><br>
	Сумма: <input name="salary" <?php if (!empty($_POST['salary'])) echo "value=\"".$_POST['salary']."\"";?>><br>
	<input type="submit">
</form>