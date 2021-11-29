<?php
include 'include.php';

//53.1
$arr = [];
$arr[] = 1;
$arr[] = 2;
$arr[] = 3;
$arr[] = 4;
$arr[] = 5;
$arr[] = 6;
$arr[] = 7;
$arr[] = 8;
$arr[] = 9;
$arr[] = 10;
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//53.2
$arr = [];
$arr[] = 'x';
$arr[] = 'x';
$arr[] = 'x';
$arr[] = 'x';
$arr[] = 'x';
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//53.3
$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//53.4
$arr = [];
for ($i = 1; $i <= 99; $i += 2) {
    $arr[] = $i;
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';