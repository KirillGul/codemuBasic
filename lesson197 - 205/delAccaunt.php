<?php
session_start();

require_once('basic.php');

if (!empty($_SESSION['id']) and !empty($_POST['password'])) {

    $link = connect(); //подключение к БД
    mysqli_query($link, "SET NAMES 'utf8'");

    $id = $_SESSION['id']; // id юзера из сессии
    $query = "SELECT * FROM users WHERE id = '$id'";

    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    $hash = $user['password']; // соленый пароль из БД
    $password = $_POST['password'];
    
    // Проверяем соответствие хеша из базы введенному старому паролю
    if (password_verify($password, $hash)) {
        $query = "DELETE FROM users WHERE id='$id'";
        mysqli_query($link, $query);
    } else {
        echo "Введен неверный пароль. Удаление не возможно.<br>";
    }
} else {
    echo "Не введен пароль. Удаление не возможно.<br>";
}
?>

<form action="" method="POST">
    Чтобы удалить аккаунт введите ваш пароль:<br>
    Ваш пароль: <input name="password"><br>
    <input type="submit" name="Удалить">
</form>