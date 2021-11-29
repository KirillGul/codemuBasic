<?php
include 'include.php';

//46.1
$arr = [1, 2, 3, 4, 0, 5];
foreach ($arr as $value) {
    if ($value === 0)
        break;
    echo $value.' ';
}
echo '<br>';

//46.2
$arr = [1, 2, 3, 4, 0, -5];
$sum = 0;
foreach ($arr as $value) {
    if ($value < 0)
        break;
    $sum += $value;
}
echo $sum;
echo '<br>';

//46.3
$arr = [1, 2, 3, 4, 0, -5];
$sum = 0;
foreach ($arr as $key => $value) {
    if ($value === 3) {
        echo $key;
        break;
    }
}
echo '<br>';

//46.4
$sum = 0;
for ($i = 1; $sum < 100; $i++) {
    $sum += $i;
}
echo $i;
echo '<br>';