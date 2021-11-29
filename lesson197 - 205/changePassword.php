<?php
session_start();

if ($_SESSION['auth'] == true) {
    echo "Ваш логин:" . $_SESSION['nameUser'] . "<br>";
    echo "Ваш статус:" . $_SESSION['status'] . "<br>";
    
    if ($_SESSION['status'] == 'admin') {
        echo "<a href=\"admin.php\">Перейти в admin.php</a><br>";
    }
}

if (!empty($_SESSION['id']) and !empty($_POST['old_password']) and !empty($_POST['new_password'])) {
    $host = 'localhost'; // имя хоста
    $user = 'root';      // имя пользователя
    $pass = 'root';      // пароль
    $name = 'mydb';      // имя базы данных
    $link = mysqli_connect($host, $user, $pass, $name);
    mysqli_query($link, "SET NAMES 'utf8'");

    $id = $_SESSION['id']; // id юзера из сессии
    $query = "SELECT * FROM users WHERE id='$id'";

    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    $hash = $user['password']; // соленый пароль из БД
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];

    if (!empty($_POST['new_password_confirm']) and $_POST['new_password_confirm'] == $newPassword) {
    
        // Проверяем соответствие хеша из базы введенному старому паролю
        if (password_verify($oldPassword, $hash)) {
            $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

            $query = "UPDATE users SET password='$newPasswordHash' WHERE id='$id'";
            mysqli_query($link, $query);
        } else {
            echo "старый пароль введен неверно, выведем сообщение<br>";
        }

    } else {
        echo "Пароли не совпадают<br>";
    }
}
?>

<form action="" method="POST">
    Страый пароль: <input name="old_password"><br>
    Новый пароль: <input name="new_password"><br>
    Подтвердить новый пароль: <input type="password" name="new_password_confirm"><br>
    <input type="submit" name="submit">
</form>