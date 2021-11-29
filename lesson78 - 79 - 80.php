<?php
include 'include.php';

//78.1
function getDigitsSum($num) {
    return array_sum(str_split($num));
}

for ($i = 1; $i <= 2030; $i++) {
    if (getDigitsSum($i) === 13) {
        echo $i.' ';
    }
}
echo '<br>';

//79.1
function getAvg($arr) {
    if (!empty($arr)) {
        return array_sum($arr) / count($arr);
    } else {
        return 0;
    }
}

function getDeliteliNum($num) {
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

echo getAvg(getDeliteliNum(2));
echo '<br>';

//80.1
function getPrimeDivisors($num) {
    $result = [];
    $divs = getOwnDivisors($num);
    
    foreach ($divs as $div) {
        if (isPrime($div)) {
            $result[] = $div;
        }
    }
    
    return $result;
}

function getOwnDivisors($num) {
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

function isPrime($num) {
    $i = 2;
    while ($num > $i) {
        if ($num % $i == 0) {
            return false;
        }
        $i++;
    }

    return true;
}

$arr = getPrimeDivisors(10);
echo '<pre>'; print_r($arr); echo '</pre>';;
echo '<br>';