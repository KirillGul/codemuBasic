<?php
include 'include.php';

//55.1
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);

for ($i = 0; $i < $length; $i++) {
    $arr[$i] = $arr[$i] ** 2;
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//55.2
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);

for ($i = 0; $i < $length; $i++) {
    $arr[$i]--;
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//55.3
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = count($arr);

for ($i = 0; $i < $length; $i++) {
    $arr[$i] += 10;
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';