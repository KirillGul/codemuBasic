<?php
session_start();

//142.1
include '../include.php';

if (!empty($_GET)) {
    $_SESSION['surname'] = $_GET['surname'];
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['year'] = $_GET['year'];
}

?>

<form action="" method="GET">
    Фамилия: <input name="surname"><br>
    Имя: <input name="name"><br>
    Возраст: <input name="year"><br>
    <input type="submit">
</form>
<br>
<a href="test2.php">test2</a>