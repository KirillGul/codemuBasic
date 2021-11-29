<?php
session_start();

$error = '';
$msg = '';
$content = '';

if (!empty($_SESSION['auth']) and $_SESSION['status'] === 'admin') {

    $id = $_GET['id']; // id юзера из сессии

    $query = "SELECT * FROM users WHERE id = '$id'";
    $result = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user['status_id'] == '2') {
        $query = "UPDATE users SET status_id='1' WHERE id='$id'";
    } else {
        $query = "UPDATE users SET status_id='2' WHERE id='$id'";
    }
    mysqli_query($link, $query);
    header('Location:admin');

} else {
    $error .= "Авторизируйтесь как админ.<br>";
}

return $page = [
    'error' => $error,
    'msg' => $msg,
    'title' => 'Удаление пользователя',
    'content' => $content
];
