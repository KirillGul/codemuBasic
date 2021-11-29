<?php
//include '../include.php';

$arrDay = [1,10,12,25];

$res = '<select>';
foreach ($arrDay as $day) {
    $res .= "<option>";
    $res .= date('l', mktime(0,0,0,0,$day));
    $res .= "</option>";
}
$res .= '</select>';