<?php
session_start();

require_once('basic.php');

if ($_SESSION['auth'] == true) {
    echo "Тест дополнительный только для авторизированных";
} else {
    echo "Вы, не авторизировнны, необходимо выполнить вход<br>";
    echo "Тест обычный";
}
