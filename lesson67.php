<?php
include 'include.php';

//67.1
echo pow(2, 10);
//echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//67.2
echo sqrt(245);
//echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//67.3
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $value) {
    $sum += pow($value, 2);
}
echo sqrt($sum);
//echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//67.4
echo round(sqrt(379), 2);
echo '<br>';
echo round(sqrt(379), 3);
echo '<br>';
echo round(sqrt(379), 4);
//echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//67.5
$arr = [];
$arr['floor'] = floor(sqrt(587));
$arr['ceil'] = ceil(sqrt(587));
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//67.6
$arr = [4, -2, 5, 19, -130, 0, 10];
echo min($arr);
echo '<br>';
echo max($arr);
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//67.7
echo mt_rand(1,100);
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//67.8
$arr = [];

for ($i = 0; $i < 10; $i++) {
    $arr[] = mt_rand(1,100);
}

echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//67.9
$a = 5;
$b = 7;
echo abs($a - $b);
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';