<?php
include 'include.php';

//81.1
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

function func1($arr) {
    echo array_shift($arr);
    if (count($arr) != 0) {
        func1($arr);
    }
}

func1($arr);
echo '<br>';

//81.2
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];

function func2($arr) {
    $sum = array_shift($arr);
    if (count($arr) != 0) {
        $sum += func2($arr);
    }
    return $sum;
}

echo func2($arr);
echo '<br>';