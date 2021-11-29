<?php
session_start();

$error = '';
$msg = '';
$content = '';

if (!empty($_SESSION['auth'])) {    
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
                $content .= $key. " - " .floor((time() - strtotime($value))/60/60/24/365)."<br>";
            } else {
                $content .= "$key - $value<br>";
            }
        }
    }
}

return $page = [
    'error' => $error,
    'msg' => $msg,
    'title' => 'Профиль пользователя',
    'content' => $content
];
