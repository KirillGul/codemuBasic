<?php
$link = require_once 'connect.php';

//запрошенный URI
$url = $_SERVER['REQUEST_URI'];
//особенности размещения движка
$url = str_replace('/lesson215Task', '', $url);

//обработка url
if (preg_match("#/(?<country>[a-z0-9_-]+)/(?<city>[a-z0-9_-]+)#", $url, $params)) {
    $page = include("view/city.php");
} elseif (preg_match("#/(?<country>[a-z0-9_-]+)#", $url, $params)) {
    $page = include("view/country.php");
} elseif (preg_match("#/#", $url, $params)) {
    $page = include("view/all.php");
}

//подключение шаблона и вывод контента
$layout = file_get_contents('layout.php');
$layout = str_replace('{{ title }}', (string) $page['title'], $layout);
$layout = str_replace('{{ content }}', (string) $page['content'], $layout);

echo $layout;
