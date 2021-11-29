<?php
include 'include.php';

//54.1
$arr = ['a', 'b', 'c', 'd', 'e'];

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i].' ';
}
echo '<br>';

//54.2
$arr = ['a', 'b', 'c', 'd', 'e'];

for ($i = 0; $i < count($arr)-1; $i++) {
    echo $arr[$i].' ';
}
echo '<br>';

//54.3
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$length = (count($arr)-1) / 2;
for ($i = 0; $i < $length ; $i++) {
    echo $arr[$i].' ';
}
echo '<br>';