<?php
include 'include.php';

//71.1
$arr = [1,2,3];
echo array_sum($arr) / count($arr);
echo '<br>';

//71.2
$arr = range(1,100);
echo array_sum($arr);
echo '<br>';

//71.3
$arr = range(1,100);
$str = implode('<br>',$arr);
echo $str;
echo '<br>';

//71.4
$arr = array_fill(0, 10, 'x');
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//71.5
$arr = range(1,10);
shuffle($arr);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//71.6
$f= 5;
$arr = range(1, $f);
echo array_product($arr);
echo '<br>';

//71.7
$num = 555;
$arr = str_split($num);
echo array_sum($arr);
echo '<br>';

//71.8
$str = 'treit';
$str = strrev($str);
$str = ucfirst($str);
$str = strrev($str);
echo $str;
echo '<br>';

//71.9
$arr = [2,4,16,32,64];
$result = array_map('sqrt', $arr);
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//71.10
$arr_keys = range('a', 'z');
$arr_values = range(1, 26);
$arr = array_combine($arr_keys, $arr_values);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//71.11
$str = '1234567890';
$sum = array_sum(str_split($str));
echo $sum;
echo '<br>';

//71.12
$str = '1234567890';
$sum = array_sum(str_split($str, 2));
echo $sum;
echo '<br>';

//71.13
$arr = range(1,9);
$result = array_chunk($arr, 3);
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';