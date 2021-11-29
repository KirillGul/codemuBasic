<?php
$url = $_SERVER['REQUEST_URI'];

//особенности размещения движка
$url = str_replace('/lesson208-210', '', $url);

//подготовка значений
$path = 'view' . $url . '.php';
if (file_exists($path)) {
    $layout  = file_get_contents('layout.php');
    $content = file_get_contents($path);


    //блок title вариант 1
    /*
    $titles = require 'titles.php';
    $title = $titles[$url];
    $layout = str_replace('{{ title }}', $title, $layout);
    */

    //блок title вариант 2
    preg_match('#{{ title: "(.+?)" }}#', $content, $match); //узнаем что в скобках {{title }} и записываем в массив $match
    $title = $match[1];
    $content = preg_replace('#{{ title: "(.+?)" }}#', '', $content); //удаляем все что в скобках {{title }}

    //вставка значений
    $layout = str_replace('{{ content }}', $content, $layout); //вставка в шаблон вместо {{content}}
    $layout = str_replace('{{ title }}', $title, $layout); //вставка в шаблон вместо {{title}}

} else {
    header('HTTP/1.0 404 Not Found');
    $layout  = file_get_contents('layout.php');
    $content = file_get_contents('view/404.php');
    $layout = str_replace('{{ content }}', $content, $layout);
    $title = '404 - Страница не найдена';
    $layout = str_replace('{{ title }}', $title, $layout);
}

//вывод на экран
echo $layout;
