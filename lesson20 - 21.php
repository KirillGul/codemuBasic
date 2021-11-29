<?php
include 'include.php';

//20.1
$arr = [];
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;
echo '<pre>'; print_r($arr); echo '</pre>';

//20.1
$arr = [1, 2, 3];
$arr[] = 4;
$arr[] = 5;
echo '<pre>'; print_r($arr); echo '</pre>';

//20.3
$arr = [];
$arr['year'] = 2021;
$arr['month'] = 9;
$arr['day'] = 10;
echo '<pre>'; print_r($arr); echo '</pre>';

//21.1
$arr = [1, 2, 3, 4, 5];
$key1 = 1;
$key2 = 2;
echo $arr[$key1] + $arr[$key2];
echo '<br>';

//21.2
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$key = 'c';
echo $arr[$key];
echo '<br>';