<?php
session_start();

$error = '';
$msg = '';
$content = '';

if (!empty($_SESSION['auth']) and $_SESSION['status'] === 'admin') {

    $query = "SELECT * FROM users";
    $result = mysqli_query($link, $query);
    for ($user = []; $row = mysqli_fetch_assoc($result); $user[] = $row);

    if (!empty($user)) {
        $content .= "<table><tr><th>Логин</th><th>Статус</th><th>Удаление</th><th>Поменять статус</th></tr>";
        foreach ($user as $value) {

            if ($value['status_id'] == '2') {
                $content .= "<tr style=\"background-color:red;\">";
            } else {
                $content .= "<tr style=\"background-color:green;\">";
            }
            $content .= "<td><a href=\"profile?nameUser=$value[login]\">Пользователь: $value[login]</a></td>"
                    ."<td>"
                    ."<td>$value[status_id]</td>"
                    ."</td>"
                    ."<td><a href=\"delAccaunt\">Удаление пользователя</a></td>";

            if ($value['status_id'] == '2') {
                $content .= "<td><a href=\"updateStatus?id=$value[id]\">Сделать пользователем</a></td>";
            } else {
                $content .= "<td><a href=\"updateStatus?id=$value[id]\">Сделать админом</a></td>";
            }

            $content .= "</tr>";
        }
        $content .= "</table>";

    } else {
        $error .= "Нет зарегистрарованных пользователей";
    }
}

return $page = [
    'error' => $error,
    'msg' => $msg,
    'title' => 'Админ панель',
    'content' => $content
];
