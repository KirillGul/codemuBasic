<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//181.1
/*
Категория:
    ид,
    название,
    ид_подкатегории
*/

//181.2
/*
SELECT
    категория.ид,
    категория.название,
    parent_cat.название
FROM
    категория
LEFT JOIN категория as parent_cat ON parent_cat.ид = категория.ид_подкатегории
*/

//181.3
/*
SELECT
    категория.ид,
    категория.название,
    parent_cat.название,
    par_parent_cat.название
FROM
    категория
LEFT JOIN категория as parent_cat ON parent_cat.ид = категория.ид_подкатегории
LEFT JOIN parent_cat as par_parent_cat ON par_parent_cat.ид = parent_cat.ид_подкатегории
*/

//181.4
/*
SELECT
    категория.ид,
    категория.название,
    parent_cat.название,
    par_parent_cat.название,
    par_par_parent_cat.название
FROM
    категория
LEFT JOIN категория as parent_cat ON parent_cat.ид = категория.ид_подкатегории
LEFT JOIN parent_cat as par_parent_cat ON par_parent_cat.ид = parent_cat.ид_подкатегории
LEFT JOIN par_parent_cat as par_par_parent_cat ON par_par_parent_cat.ид = par_parent_cat.ид_подкатегории
*/