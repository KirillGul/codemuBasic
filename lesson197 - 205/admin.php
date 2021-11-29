<?php
session_start();

require_once('basic.php');

if (!empty($_SESSION['auth']) and $_SESSION['status'] === 'admin') {

    $link = connect(); //подключение к БД
    mysqli_query($link, "SET NAMES 'utf8'");

    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query);
    for ($user = []; $row = mysqli_fetch_assoc($result); $user[] = $row);

    if (!empty($user)) {
        $str = "<table><tr><th>Логин</th><th>Статус</th><th>Удаление</th><th>Поменять статус</th></tr>";
        foreach ($user as $value) {

            if ($value['status_id'] == '2') {
                $str .= "<tr style=\"background-color:red;\">";
            } else {
                $str .= "<tr style=\"background-color:green;\">";
            }
            $str .= "<td><a href=\"profile.php?nameUser=$value[login]\">Пользователь: $value[login]</a></td>";
            $str .= "<td>";
            $str .= "<td>$value[status_id]</td>";
            $str .= "</td>";
            $str .= "<td><a href=\"delAccaunt.php\">Удаление пользователя</a></td>";

            if ($value['status_id'] == '2') {
                $str .= "<td><a href=\"updateStatus.php?id=$value[id]\">Сделать пользователем</a></td>";
            } else {
                $str .= "<td><a href=\"updateStatus.php?id=$value[id]\">Сделать админом</a></td>";
            }

            $str .= "</tr>";
        }
        $str .= "</table>";
        echo $str;
    } else {
        echo "Нет зарегистрарованных пользователей";
    }
}
