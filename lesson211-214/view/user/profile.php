<?php
//$login = $params[1];
$login= $params['slug'];

$query = "SELECT login, fa, im, ot, rdat, email FROM users WHERE login='$login'";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_array($result);

$content =  "<table>
                <tr>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Дата рождения</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>{$data['fa']}</td>
                    <td>{$data['im']}</td>
                    <td>{$data['ot']}</td>
                    <td>{$data['rdat']}</td>
                    <td>{$data['email']}</td>
                </tr>
            </table>";

$page = [
    'title' => "Профиль пользователя {$data['login']}",
    'content' => $content
];

return $page;