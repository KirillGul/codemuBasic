<?php
include_once '../include.php';

require_once 'pow.php';
	
function squareSum($arr) {
    $res = 0;
    
    foreach ($arr as $elem) {
        $res += square($elem);
    }
    
    return $res;
}

function cubeSum($arr) {
    $res = 0;
    
    foreach ($arr as $elem) {
        $res += cube($elem);
    }
    
    return $res;
}