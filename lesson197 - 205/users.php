<?php
session_start();

require_once('basic.php');

$link = connect(); //подключение к БД
mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
for ($user = []; $row = mysqli_fetch_assoc($result); $user[] = $row);

if (!empty($user)) {
    foreach ($user as $value) {
        echo "<a href=\"profile.php?nameUser=$value[login]\">Пользователь: $value[login]</a><br>";
    }
} else {
    echo "Нет зарегистрарованных пользователей";
}
