<?php
session_start();

if (!empty($_SESSION['auth'])) {

    echo "Ваш логин:" . $_SESSION['nameUser'] . "<br>";
    echo "Ваш статус:" . $_SESSION['status'] . "<br>";
    
    if ($_SESSION['status'] == 'admin') {
        echo "<a href=\"admin.php\">Перейти в admin.php</a><br>";
    }

    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = 'root';      // пароль
    $name = 'mydb';      // имя базы данных
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");
    
    if (!empty($_GET['nameUser'])) {
        $login = $_GET['nameUser'];
    } else {
        $login = $_SESSION['nameUser'];
    }

    $query = "SELECT * FROM users WHERE login='$login'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    foreach ($user as $key=>$value) {
        if ($key != 'id' and $key != 'password' and $key != 'email' and $key != 'dateReg') {
            if ($key == 'rdat') {
                echo $key. " - " .floor((time() - strtotime($value))/60/60/24/365);
            } else {
                echo "$key - $value<br>";
            }
        }
    }
}