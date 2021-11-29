<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//183.1

//184.1
/*
Реки:
    ид,
    имя,
    приток,
    море_ид
Море:
    ид,
    имя
*/

//184.2
/*
Пользователь:
    ид,
    имя
Сообщения:
    ид,
    от_кого_ид,
    куму_ид
*/

//184.3
/*
Команда:
    ид,
    название
Игра:
    ид,
    дата_игры,
    ид_1_команды,
    ид_2_команды
Игроки:
    ид,
    имя,
    ид_команды
*/

//184.4
/*
Категории:
    ид,
    название
Тема:
    ид,
    название,
    ид_категории
    ид_пользователя,
Пользователь:
    ид,
    имя
Пост в теме:
    ид,
    ид_темы,
    ид_пользователя
Сообщения:
    ид,
    сообщение,
    от_кого_ид_пользователя,
    куму_ид_пользователя
*/

//184.5
/*
Пользователи:
    ид,
    имя
Друзья:
    ид,
    ид_пользователя,
    ид_пользователя_друга
Стена:
    ид,
    ид_пользвателя
Сообщения на стене:
    ид_стены,
    ид_пользователя,
    сообщение
Сообщения пользователей:
    ид,
    сообщение,
    от_кого_ид_пользователя,
    куму_ид_пользователя
*/

//184.6
/*
Родственники:
    ид,
    имя
Родственные связи:
    ид,
    ид_типа_связи
    связь_ид_кому
    связь_ид_кого
Тип:
    ид,
    имя_связи (бабушка, дедушка и т.п.)
*/