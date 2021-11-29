<?php
include 'include.php';

//76.1
function isChetArr ($arr) {
    foreach ($arr as $value) {
        if ($value % 2 != 0) {
            return false;
            break;
        }
    }

    return true;
}
echo '<br>';

//76.2
function isChetNum ($num) {
    $arr = str_split($num);
    foreach ($arr as $value) {
        if ($value % 2 == 0) {
            return false;
            break;
        }
    }

    return true;
}
echo '<br>';

//76.3
function isArrTwoElemCheck ($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        if (isset($arr[$i+1])) {
            if ($arr[$i] === $arr[$i+1]) {
                return true;
            }
        }
    }

    return false;
}

echo isArrTwoElemCheck([1,2,3,3,5]);
echo '<br>';