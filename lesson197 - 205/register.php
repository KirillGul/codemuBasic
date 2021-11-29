<?php
session_start();

//начальный вывод на экран
require_once('basic.php');

$link = connect(); //подключение к БД
mysqli_query($link, "SET NAMES 'utf8'");

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
    if ($passLen < 3 or $passLen > 12) $errorPassword .= "Пароль должен быть больше 6 и меньше 12 символов<br>";
}


if (!empty($login) and !empty($password)) {
    if ($errorLogin === '' and $errorPassword === '' and $errorConfirm === '') {

        //
        $query = "SELECT * FROM users WHERE login='$login'";
        $user = mysqli_fetch_assoc(mysqli_query($link, $query));

        if (empty($user)) {
            $login = $_POST['login'];
            
            //старый подход
            //$salt = generateSalt(); // соль           
	        // $password = md5($salt . $_POST['password']); // соленый пароль
            
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
            if (!preg_match('#\d{2,2}\.\d{2,2}\.\d{4,4}#', $rdat)) $flagRdat = 1;

            $_SESSION['auth'] = true;

            $id = mysqli_insert_id($link);
            $_SESSION['id'] = $id; // пишем id в сессию
            $_SESSION['nameUser'] = $login; // пишем login в сессию
        } else {
            $errorLogin = "Пользователь с данным именем занят<br>";
        }
        //
    }
} else {
    echo "Не задан логин или пароль<br>";
}

/*
//старый подход
function generateSalt()
{
    $salt = '';
    $saltLength = 8; // длина соли
    
    for($i = 0; $i < $saltLength; $i++) {
        $salt .= chr(mt_rand(33, 126)); // символ из ASCII-table
    }
    
    return $salt;
}
*/

?>

<form action="" method="POST">

    <?php if (!empty($errorLogin)) echo $errorLogin."<br>"; ?>
    Логин: <input name="login"><br>

    <?php if (!empty($errorPassword)) echo $errorPassword."<br>"; ?>
    Пароль: <input name="password" type="password"><br>

    <?php if (!empty($errorConfirm)) echo $errorConfirm."<br>"; ?>
    Подтверждение пароля: <input type="password" name="confirm"><br>

    Фамилия: <input name="fa"><br>
    Имя: <input name="im"><br>
    Отчество: <input name="ot"><br>

    <?php if (isset($flagRdat) and $flagRdat === 1) echo "Неверный формат даты рождения (необходимо dd.mm.yyyy)<br>"; ?>
    Дата рождения: <input name="rdat"><br>

    <?php if (isset($flagEmail) and $flagEmail === 1) echo "Неверный формат Email<br>"; ?>
    E-mail: <input name="email"><br>

    Ввыберите страну проживания:
    <select name="country">
        <option>Россия</option>
        <option>Украина</option>
        <option>Беларусь</option>
    </select>

    <input type="submit">
</form>