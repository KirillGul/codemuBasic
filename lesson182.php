<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//182.1
/*
Юзеры:
    id,
    name,
    father_id,
    mother_id
Папы:
    id,
    father_name
Мамы:
    id,
    mother_name
*/

//182.2
/*
SELECT
	users.name as user_name,
	fathers.name as father_name
    mother.name as mother_name
FROM
	users
LEFT JOIN users as fathers ON fathers.id=users.father_id
LEFT JOIN users as mother ON mother.id=users.mother_id
*/