<?php
include 'include.php';

//74.1
function kub($num) {
    return pow($num,3);
}

$result = kub(3);
var_dump($result);
echo '<br>';

//74.2
function kvkoren($num) {
    return sqrt($num);
}

echo kvkoren(3) + kvkoren(4);
echo '<br>';

//74.3
function func3($num) {
    return $num;
    
    $result = $num * $num;
    return $result;
}

echo func3(3);
echo '<br>';

//74.4
function func4($num) {
    if ($num <= 0) {
        return abs($num);
    } else {
        return $num * $num;
    }
}

echo func4(10);
echo func4(-5);
echo '<br>';

//74.5
function func5($num) {
    if ($num <= 0) {
        return abs($num);
    }
    
    return $num * $num;
}

echo func5(10);
echo func5(-5);
echo '<br>';

//74.6
function func($num) {
    $sum = 0;
    
    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
        return $sum;
    }
}

echo func(5);
echo '<br>';

//74.7
function func7($num) {    
    $i = 0;
    while ($num > 10) {
        $num /= 2;
        $i++;
    }

    return $i;
}

echo func7(21);
echo '<br>';

//74.8
function func8($num1, $num2) {
    if ($num1 > 0 and $num2 > 0) {
        return $num1 * $num2;
    } else {
        return $num1 - $num2;
    }
}

echo func8(3, 4);
echo '<br>';

