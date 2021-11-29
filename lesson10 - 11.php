<?php
include 'include.php';

//10.1
$a = '1';
$b = '2';
echo $a + $b + '3';
echo '<br>';

//11.1
$test = '12345';
var_dump((int)($test));
echo '<br>';

//11.2
$test = '12.345';
var_dump((float)($test));
echo '<br>';

//11.3
$test = '12.345';
var_dump((int)($test));
echo '<br>';

//11.4
$test = '12345';
var_dump((string)($test));
echo '<br>';

//11.5
$test = '12.345';
var_dump((string)($test));
echo '<br>';