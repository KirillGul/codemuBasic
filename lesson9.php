<?php
include 'include.php';

//9.1
echo 60 * 60 * 24;
echo '<br>';

//9.2
echo 60 * 60 * 24 * 30;
echo '<br>';

//9.3
echo 60 * 60 * 24 * 365;
echo '<br>';

//9.4
echo 60 * 24;
echo '<br>';

//9.5
echo 60 * 24 * 365;
echo '<br>';

//9.6
echo 1024 * 1024;
echo '<br>';

//9.7
echo 1024 * 1024 * 1024;
echo '<br>';

//9.8
echo 1024 * 1024 * 1024 * 10;
echo '<br>';

//9.9
echo 1024 * 1024 * 1024 * 1024;
echo '<br>';

//9.10
echo 1024 * 1024 * 1024;
echo '<br>';

//9.11
$r= 5;
$s = 3.14 * ($r ** 2);
echo $s;
echo '<br>';

//9.12
$a= 5;
$s = $a ** 2;
echo $s;
echo '<br>';

//9.13
$a= 5;
$b= 2;
$s = $a * $b;
echo $s;
echo '<br>';

//9.14
$a= 5;
$b= 2;
$p = 2 * ($a + $b);
echo $p;
echo '<br>';

//9.15
$tc= 30;
$tf= 9/5 * $tc + 32;
echo $tf;
echo '<br>';

//9.16
$tf= 86;
$tc= ($tf - 32) * (5/9);
echo $tc;
echo '<br>';