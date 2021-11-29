<?php
include 'include.php';

//5.1
$str = 'hello';
echo $str.'<br>';

//5.2
$str1 = 'abc';
$str2 = 'def';
echo $str1 . $str2 . '<br>';

//5.3
$str1 = 'hello';
$str2 = 'world';
echo $str1 .' '. $str2 . '<br>';

//5.4
$str = 'fsf';
echo strlen($str). '<br>';

//5.5
$str = 'йцуке';
echo mb_strlen($str). '<br>';