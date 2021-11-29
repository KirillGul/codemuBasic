<?php
include 'include.php';

//128.2
if (!empty($_POST['name']) and !empty($_POST['year'])) {
    echo $_POST['name'];
    echo "<br>";
    echo $_POST['year'];
}


//128.3
$pass = '12345';
if (!empty($_POST['pass'])) {
    if ( $_POST['pass'] == $pass) {
        echo 'Введен правильный пароль';
    } else {
        echo 'Введен не правильный пароль';
    }
}

//128.4
if (!empty($_POST['year']) and !empty($_POST['month']) and !empty($_POST['day'])) {
    echo date('l', mktime(0,0,0, $_POST['month'], $_POST['day'], $_POST['year']));
}