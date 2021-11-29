<?php
include 'include.php';

//12.1
$str = 'abcde';
echo $str[0];
echo $str[2];
echo $str[4];
echo '<br>';

//12.2
$str = 'abcde';
$strNew = $str[4].$str[3].$str[2].$str[1].$str[0];
echo $strNew;
echo '<br>';

//12.3
$str = 'abcde';
$num = 3;
echo $str[$num];
echo '<br>';

//12.4
$str = 'abcde';
echo $str[strlen($str)-1];
echo '<br>';

//12.5
$str = 'abcde';
echo $str[strlen($str)-2];
echo '<br>';

//12.6
$str = 'abcde';
echo $str[strlen($str)-3];
echo '<br>';

//12.7
$str = '12345';
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
echo '<br>';

//12.8
$str = 12345;
$str = (string)$str;
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
echo '<br>';

//12.9
$str = 12345;
$str = (string)$str;
echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4];
echo '<br>';

//12.10
$str = 12345;
$str = (string)$str;
echo $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
echo '<br>';