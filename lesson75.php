<?php
include 'include.php';

//75.1
function sumKvKoren ($arr) {
    $sum = 0;

    foreach ($arr as $value) {
        $sum += sqrt($value);
    }

    return $sum;
}
echo '<br>';

//75.2
function getDivisors ($num) {
    $arr = [];
    $i = 1;
    while ($num >= $i) {
        if ($num % $i == 0) {
            $arr[] = $i;
        }
        $i++;
    }

    return $arr;
}

$arr = getDivisors(4);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//75.3
function delElem ($elem, $arr) {
    $result = [];

    foreach ($arr as $value) {
        if ($elem !== $value) {
            $result[] = $value;
        }
    }

    return $result;
}

$arr = delElem(2, [1,2,3,4]);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';