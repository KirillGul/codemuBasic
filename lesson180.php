<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//180.1
/*
Товар:
    ид, название, цена
Товар_категории:
    ид, товар_ид, категория_ид
Категория:
    ид, название
*/

//180.2
/*
SELECT
    товар.ид,
    товар.название,
    товар.цена,
    категория.название as cat_name
FROM
    товар
LEFT JOIN товар_категории ON товар.ид = товар_категории.товар_ид
LEFT JOIN категория ON товар_категории.категория_ид = категория.ид
*/

//180.3
$query = "запрос";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$res = [];
	
foreach ($data as $elem) {
	$res[$elem['user_name']][] = $elem['city_name'];
}
	
var_dump($res);

echo "<ul>";
foreach ($res as $prod) {
    $li = "<li>$prod:";
    foreach ($prod as $cat) {
        $li .= " $cat";
    }
    echo $li .= "</li>";
}
echo "</ul>";