<?php
include 'include.php';

//56.1
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
foreach ($arr as $key => $value) {
    $arr[$key] = $value + $value * 0.1;
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//56.2
$arr = [
    'employee1' => 100,
    'employee2' => 200,
    'employee3' => 300,
    'employee4' => 400,
    'employee5' => 500,
    'employee6' => 600,
    'employee7' => 700,
];
foreach ($arr as $key => $value) {
    if ($value <= 400) {
        $arr[$key] = $value + $value * 0.1;
    }
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//56.3
$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
$sumKey = 0;
$sumValue = 0;
foreach ($arr as $key => $value) {
    $sumKey += $key;
    $sumValue += $value;
}
echo $sumKey / $sumValue;
echo '<br>';

//56.4
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$arrK = [];
$arrV = [];

foreach ($arr as $key => $value) {
    $arrK[] = $key;
    $arrV[] = $value;
}
echo '<pre>'; print_r($arrK); echo '</pre>';
echo '<pre>'; print_r($arrV); echo '</pre>';
echo '<br>';

//56.5
$arr = [
    1 => 125,
    2 => 225,
    3 => 128,
    4 => 356,
    5 => 145,
    6 => 281,
    7 => 452,
];
$arrNew = [];

foreach ($arr as $value) {
    $valueStr = $value.'';
    if ($valueStr[0] === '1' or $valueStr[0] === '2') {
        $arrNew[] = $value;
    }
}
echo '<pre>'; print_r($arrNew); echo '</pre>';
echo '<br>';