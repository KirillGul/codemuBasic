<?php
include 'include.php';

//61.1
for ($i = 1; $i <= 100; $i++) {
    echo $i.' ';
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.2
for ($i = 100; $i >= 1; $i--) {
    echo $i.' ';
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.3
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0)
        echo $i.' ';
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.4
$arr = [];
for ($i = 1; $i <= 10; $i++) {
        $arr[] = 'x';
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.5
$arr = [];
for ($i = 1; $i <= 10; $i++) {
        $arr[] = $i;
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.6
$arr = [1, 5, 77, 15, 7];
for ($i = 0; $i <= count($arr)-1; $i++) {
        if ($arr[$i] > 0 and $arr[$i] < 10) {
            echo $arr[$i].' ';
        }
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.7
$arr = [1, 5, 77, 15, 7];
$flag = false;
for ($i = 0; $i <= count($arr)-1; $i++) {
        if ($arr[$i] === 5) {
            $flag = true;
            break;
        }
}

if ($flag)
    echo 'Есть';
else
    echo 'Нет';
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.8
$arr = [1, 5, 77, 15, 7];
$sum = 0;
for ($i = 0; $i <= count($arr)-1; $i++) {
    $sum += $arr[$i];
}
echo $sum;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.9
$arr = [1, 5, 77, 15, 7];
$sum = 0;
for ($i = 0; $i <= count($arr)-1; $i++) {
    $sum += $arr[$i] ** 2;
}
echo $sum;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.10
$arr = [1, 5, 77, 15, 7];
$sum = 0;
for ($i = 0; $i <= count($arr)-1; $i++) {
    $sum += $arr[$i];
}
$result = $sum / count($arr);
echo $result;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//61.11
$num = 4;
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo $factorial;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';