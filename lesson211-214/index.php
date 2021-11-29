<?php
$link = require 'connect.php';

//запрошенный URI
$url = $_SERVER['REQUEST_URI'];
//особенности размещения движка
$url = str_replace('/lesson211-214', '', $url);
//создаем массив $matches с данными URI
//preg_match('#/page/(\d+)#', $url, $match);
//preg_match('#/page/([a-z0-9_-]+)#', $url, $match);

/*
if (preg_match('#/page/all#', $url, $params)) {
    $page = include 'view/page/all.php';
} elseif (preg_match('#/page/(?<slug>[a-z0-9_-]+)#', $url, $params)) {
    $page = include 'view/page/show.php';
}
*/

if (preg_match("#/page/(?<catSlug>[a-z0-9_-]+)/(?<pageSlug>[a-z0-9_-]+)#", $url, $params)) {
    $page = include 'view/page/show.php';
} elseif (preg_match("#/page/(?<catSlug>[a-z0-9_-]+)#", $url, $params)) {
    $page = include 'view/page/category.php';
} elseif (preg_match("#/#", $url, $params)) {
    $page = include 'view/page/all.php';
}

/*
if (preg_match('#/user/all#', $url, $params)) {
    $page = include 'view/user/all.php';
} elseif (preg_match('#/user/(?<slug>[a-z0-9_-]+)#', $url, $params)) {
    $page = include 'view/user/profile.php';
}
*/

$layout = file_get_contents('layout.php');
$layout = str_replace('{{ title }}', $page['title'], $layout);
$layout = str_replace('{{ content }}', $page['content'], $layout);

echo $layout;
