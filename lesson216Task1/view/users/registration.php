<?php
session_start();

$error = '';
$msg = '';
$content = '';

//валидация логина
if (!empty($_POST['login'])) {
    $errorLogin = '';
    $login = $_POST['login'];

    if (!preg_match('#[a-zA-Z0-9]+#', $login)) $errorLogin .= "Логин должен содеражть только буквы из цифры<br>";
    if (strlen($login) < 4 and strlen($login) > 10) $errorLogin .= "Логин должен быть больше 4 и меньше 10 символов<br>";
}

//валидация пароля
if (!empty($_POST['password'])) {
    $errorPassword = '';
    $password = $_POST['password'];

    $errorConfirm = '';
    if (!empty($_POST['confirm'])) {
        if ($password != $_POST['confirm']) $errorConfirm = "Пароль и повторение не совпадают<br>";
    } else {
        $errorConfirm = "Не задан повтор пароля<br>";
    }

    $passLen = strlen($password);
    if ($passLen < 3 or $passLen > 12) $errorPassword .= "Пароль должен быть больше 3 и меньше 12 символов<br>";
}


if (!empty($login) and !empty($password)) {
    if ($errorLogin === '' and $errorPassword === '' and $errorConfirm === '') {

        //
        $query = "SELECT * FROM users WHERE login='$login'";
        $user = mysqli_fetch_assoc(mysqli_query($link, $query));

        if (empty($user)) {
            $login = $_POST['login'];
            
            //новый подход
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $rdat = $_POST['rdat'];
            $rdat = implode('-', array_reverse(explode('.', $rdat)));
            $email = $_POST['email'];
            $fa = $_POST['fa'];
            $im = $_POST['im'];
            $ot = $_POST['ot'];
            $dateReg = time();

            $query = "INSERT INTO users SET login='$login', password='$password', fa='$fa', im='$im', ot='$ot', rdat='$rdat', email='$email', dateReg=$dateReg, status_id='1'";
            mysqli_query($link, $query);

            //проверка Email
            if (!preg_match('#\w+@\w+\..{2,3}#', $email)) $flagEmail = 1;
            //проверка Даты рождения
            if (!preg_match('#\d{4,4}-\d{2,2}-\d{2,2}#', $rdat)) $flagRdat = 1;

            $_SESSION['auth'] = true;

            $id = mysqli_insert_id($link);
            $_SESSION['id'] = $id; // пишем id в сессию
            $_SESSION['nameUser'] = $login; // пишем login в сессию
            $msg = "Пользователь успешно добавлен<br>";
        } else {
            $errorLogin = "Пользователь с данным именем занят<br>";
        }
        //
    }
} elseif ((isset($login) and empty($login)) or (isset($password) and empty($password))) {
    $error .= "Не задан логин или пароль<br>";
}

$content = "<form action=\"\" method=\"POST\">"
        ."<table><tr>";

if (!empty($errorLogin)) $error .= $errorLogin."<br>";

$content .= "<td>Логин:</td>"
        ."<td><input name=\"login\"></td>"
        ."</tr>"
        ."<tr>";

if (!empty($errorPassword)) $error .= $errorPassword."<br>";

$content .= "<td>Пароль:</td>"
        ."<td><input name=\"password\" type=\"password\"></td>"
        ."</tr>"
        ."<tr>";

if (!empty($errorConfirm)) $error .= $errorConfirm."<br>";

$content .= "<td>Подтверждение пароля:</td>"
        ."<td><input type=\"password\" name=\"confirm\"></td>"
        ."</tr>"
        ."<tr>"
        ."<td>Фамилия:</td>"
        ."<td><input name=\"fa\"></td>"
        ."</tr>"
        ."<tr>"
        ."<td>Имя:</td>"
        ."<td><input name=\"im\"></td>"
        ."</tr>"
        ."<tr>"
        ."<td>Отчество:</td>"
        ."<td><input name=\"ot\"></td>"
        ."</tr>"
        ."<tr>";

if (isset($flagRdat) and $flagRdat === 1) $error .= "Неверный формат даты рождения (необходимо dd.mm.yyyy)<br>";
            
$content .= "<td>Дата рождения:</td>"
        ."<td><input name=\"rdat\"></td>"
        ."</tr>"
        ."<tr>";

if (isset($flagEmail) and $flagEmail === 1) $error .= "Неверный формат Email<br>";

$content .= "<td>E-mail:</td>"
        ."<td><input name=\"email\"></td>"
        ."</tr>"
        ."<tr>"
        ."<td>Ввыберите страну проживания:</td>"
        ."<td>"
        ."<select name=\"country\">"
        ."<option>Россия</option>"
        ."<option>Украина</option>"
        ."<option>Беларусь</option>"
        ."</select>"
        ."</td>"
        ."</tr>"
        ."<tr>"
        ."<td rowspace=\"2\"><input type=\"submit\"></td>"
        ."</tr>"
    ."</table>"
."</form>";

return $page = [
    'error' => $error,
    'msg' => $msg,
    'title' => 'Регистрация пользователя',
    'content' => $content
];
