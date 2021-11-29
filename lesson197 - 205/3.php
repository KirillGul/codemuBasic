<?php
session_start();

if (!empty($_SESSION['auth']) and $_SESSION['status'] === 'admin') {
    echo "Ваш логин:" . $_SESSION['nameUser'] . "<br>";
    echo "Ваш статус:" . $_SESSION['status'] . "<br>";

    if ($_SESSION['status'] == 'admin') {
        echo "<a href=\"admin.php\">Перейти в admin.php</a><br>";
    }

    echo "Данный контент только для Администраторов";
    
} else {
    echo "авторизируйтесь";
}