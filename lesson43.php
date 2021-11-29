<?php
include 'include.php';

//43.1
$arr = [1, 2, 3, 4, 5];
foreach ($arr as $value) {
    if ($value % 2 != 0)
        echo $value.'<br>';
}
echo '<br>';

//43.2
$arr = [2, 5, 9, 15, 1, 4];
foreach ($arr as $value) {
    if ($value > 2 and $value < 10)
        echo $value.'<br>';
}
echo '<br>';

//43.3
$arr = [2, 5, 9, 15, -1, -4];
$sumPositive = 0;
foreach ($arr as $value) {
    if ($value > 0)
        $sumPositive += $value;
}
echo $sumPositive;
echo '<br>';

//43.4
$arr = [10, 20, 30, 50, 235, 3000];
foreach ($arr as $value) {
    $str = $value.'';
    if ($str[0] === '1' or $str[0] === '2' or $str[0] === '5')
        echo $value.'<br>';
}
echo '<br>';

//43.5
$arr = ['пон', 'втр', 'сре', 'чет', 'пят', 'суб', 'вос'];
foreach ($arr as $key => $value) {
    if ($key === 5 or $key === 6)
        echo '<strong>'.$value.'</strong><br>';
    else
        echo $value.'<br>';
}
echo '<br>';

//43.6
$day = 5;
$arr = [1 => 'пон', 'втр', 'сре', 'чет', 'пят', 'суб', 'вос'];
foreach ($arr as $key => $value) {
    if ($key === $day)
        echo '<strong>'.$value.'</strong><br>';
    else
        echo $value.'<br>';
}
echo '<br>';