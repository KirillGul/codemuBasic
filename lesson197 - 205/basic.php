<?php
if ($_SESSION['auth'] == true) {
    echo "Ваш логин:" . $_SESSION['nameUser'];
    echo " | Cтатус пользователя: " . $_SESSION['status'];

    if ($_SESSION['status'] == 'admin') {
        echo " | <a href=\"admin.php\">Перейти в Admin</a>";
    }

    echo " | <a href=\"logout.php\">Logout</a>";
} else {
    echo "<a href=\"login.php\">Login</a>";
    echo " | <a href=\"register.php\">Register</a>";
}

echo "<br><br>";

function connect() {
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = 'root';      // пароль
    $name = 'mydb';      // имя базы данных

    return mysqli_connect($host, $user, $pass, $name);
}
