<?php
include 'include.php';

//57.1
$arr = [1, 2, 3, 4, 5];
$length = count($arr);

for ($i = 0; $i < $length-1; $i++) {
    echo $arr[$i + 1].' ';
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//57.2
$arr = [1, 2, 3, 4, 5];
$length = count($arr);

for ($i = 2; $i < $length-1; $i++) {
    echo  $arr[$i] + $arr[$i+1];
    echo ' ';
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//57.3
$arr = [1, 2, 3, 4, 5];
$length = count($arr);

for ($i = 2; $i < $length; $i++) {
    echo $arr[$i-1].'-'.$arr[$i-2].' ';
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//57.4
$arr = [1, 2, 3, 4, 5];
$length = count($arr);

for ($i = 2; $i < $length; $i++) {
    echo $arr[$i] + $arr[$i-1] + $arr[$i-2];
    echo ' ';
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//57.5
$arr = [1, 2, 3, 4, 5];
$length = count($arr);

for ($i = 1; $i < $length-1; $i++) {
    echo $arr[$i - 1] + $arr[$i] + $arr[$i + 1];
    echo ' ';
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';