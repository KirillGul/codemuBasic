<?php
/*
* Доска объявлений
* 
*  БД: 
+Пользователь:
    ИД, Логин, Пароль, Фамилия, Имя, Отчество, Дата рождения, Email, Дата регистрации, ИД_статуса
+Статус пользователя:
    ИД, Название_статуса
+Рубрика:
    ИД, Слаг, Название
+Объявление:
    ИД, Заголовок, Текст, Дата размещения, ИД_Категории, ИД_статуса
+Статус объявления (актуально, в архиве, черновик):
    ИД, Статус

    Реализуйте доску объявлений. Пользователь заходит на сайт, выбирает рубрику и размещает в ней свое объявление. 
*/

session_start();

//-=Подготовка переменных=-------------------------------------------------------------
define("ADRESS", "/lesson216Task1");

$link = require('connect.php');
mysqli_query($link, "SET NAMES 'utf8'");

$topmenu = '';
$url = $_SERVER['REQUEST_URI'];
$url = str_replace(ADRESS, '', $url);

if($url == "/index.php" ) {
    header( "Location: ".ADRESS, TRUE, 301 );
    exit();
}
//-==-

//-=Route=-------------------------------------------------------------
include_once "route.php";
//-==-

//-=Ссылка на Главную страницу=-------------------------------------------------------------
if ($url == '/') $topmenu .= '';
else $topmenu .= "<a href=\"".ADRESS."/\">Главная страница</a> | ";
//-==-

//-=Формирование topmenu=-------------------------------------------------------------
if (isset($_SESSION['auth']) and $_SESSION['auth'] == true) {
    $topmenu .= "Ваш логин: {$_SESSION['nameUser']} | Cтатус пользователя: {$_SESSION['status']}";

    if ($_SESSION['status'] == 'admin') {
        $topmenu .= " | <a href=\"admin\">Перейти в Admin</a>";
    }

    $topmenu .= " | <a href=\"logout\">Logout</a><br>";
} else {
    $topmenu .= "<a href=\"login\">Login</a>"
        ." | <a href=\"registration\">Register</a>";
}
//-==-

$layout = file_get_contents('layout.php');

if (!isset($page['title'])) {
    $title = 'Главная страница';
} else $title = $page['title'];
$layout = str_replace('{{ title }}', (string) $title, $layout); //вывод title

if (!isset($page['error'])) {
    $error = '';
} else $error = $page['error'];
$layout = str_replace('{{ error }}', (string) $error, $layout); //вывод ошибок

if (!isset($page['msg'])) {
    $msg = '';
} else $msg = $page['msg'];
$layout = str_replace('{{ msg }}', (string) $msg, $layout); //вывод сообщений

if (!isset($page['content'])) {
    $content = '';
} else $content = $page['content'];
$layout = str_replace('{{ content }}', (string) $content, $layout); //вывод основной контент


$layout = str_replace('{{ topmenu }}', (string) $topmenu, $layout); //вывод верхнего меню

echo $layout;
