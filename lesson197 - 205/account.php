<?php
session_start();

if ($_SESSION['auth'] == true) {
    echo "Ваш логин:" . $_SESSION['nameUser'] . "<br>";
    echo "Ваш статус:" . $_SESSION['status'] . "<br>";
    
    if ($_SESSION['status'] == 'admin') {
        echo "<a href=\"admin.php\">Перейти в admin.php</a><br>";
    }
}

if (!empty($_SESSION['id'])) {

    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = 'root';      // пароль
    $name = 'mydb';      // имя базы данных
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");
    
	$id = $_SESSION['id'];
	$query = "SELECT * FROM users WHERE id='$id'";
	
	$result = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($result);

}

if (!empty($_POST['submit'])) {
    $name = $_POST['im'];
    $surname = $_POST['fa'];
    
    $query = "UPDATE users SET im='$name', fa='$surname' WHERE id=$id";
    mysqli_query($link, $query);
}

?>
<form action="" method="POST">
	<input name="im" <?php if (!empty($user['im'])) echo "value=\"$user[im]\"";?>>
	<input name="fa" <?php if (!empty($user['fa'])) echo "value=\"$user[fa]\"";?>>
	<input type="submit" name="submit">
</form>