<?php
include 'include.php';

//41.1
$arr = ['a', 'b', 'c', 'd', 'e'];

foreach ($arr as $value) {
    echo $value.'<br>';
}

//41.2
$sum = 0;
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value) {
    $sum += $value;
}
echo $sum;
echo '<br>';

//41.3
$sum = 0;
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value) {
    $sum += $value;
}
echo $sum / count($arr);
echo '<br>';

//42.1
$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];

foreach ($arr as $key => $value) {
    echo $key.'-'.$value.'<br>';
}
echo '<br>';

//42.2
$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];

foreach ($arr as $key => $value) {
    echo $key.' - возраст '.$value.' лет<br>';
}
echo '<br>';