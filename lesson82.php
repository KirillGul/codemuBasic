<?php
include 'include.php';

//82.1
$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];

function func($arr) {
    foreach ($arr as $value) {
        if (is_array($value)) {
            func($value);
        } else {
            echo $value.'';
        }
    }
}

func($arr);
echo '<br>';

//82.2
$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];

function func2($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        if (is_array($value)) {
            $sum += func2($value);
        } else {
            $sum += $value;
        }
    }

    return $sum;
}

echo func2($arr);
echo '<br>';

//82.3
$arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];

function func3($arr) {
    $str= '';
    foreach ($arr as $value) {
        if (is_array($value)) {
            $str .= func3($value);
        } else {
            $str .= $value;
        }
    }

    return $str;
}

echo func3($arr);
echo '<br>';

//82.4
$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];

function func4($arr) {
    $rez = [];
    foreach ($arr as $value) {
        if (is_array($value)) {
            $rez[] = func4($value);
        } else {
            $rez[]= $value * $value;
        }
    }

    return $rez;
}

echo '<pre>'; print_r(func4($arr)); echo '</pre>';;
echo '<br>';