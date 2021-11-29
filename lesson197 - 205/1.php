<?php
session_start();

if ($_SESSION['auth'] == true) {
    echo "Ваш логин:" . $_SESSION['nameUser'] . "<br>";
    echo "Ваш статус:" . $_SESSION['status'] . "<br>";

    if ($_SESSION['status'] == 'admin') {
        echo "<a href=\"admin.php\">Перейти в admin.php</a><br>";
    }

    echo "Текст 1";
} else {
    echo "авторизируйтесь";
}