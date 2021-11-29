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

if (!empty($_GET) and !empty($_POST)) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];

    $query = "UPDATE users SET name='$name', age='$age', salary='$salary' WHERE id=$id";
    mysqli_query($link, $query) or die(mysqli_error($link));

    echo 'юзер успешно изменен!';
}

?>
<form action="edit.php?id=<?= $_GET['id'] ?>" method="POST">
	<input name="name" value="<?= $user['name'] ?>">
	<input name="age" value="<?= $user['age'] ?>">
	<input name="salary" value="<?= $user['salary'] ?>">
	<input type="submit">
</form>