<?php
include 'include.php';

//64.1
$arr = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $arr[$i][$j] = $j+1;
    }
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//64.2
$arr = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $arr[$i][$j] = 'x';
    }
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//64.3
$arr = [];

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k < 5; $k++) {
            $arr[$i][$j][$k] = $k+1;
        }
    }
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//64.4
$arr = [];
$count = 1;

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 2; $j++, $count++) {
        $arr[$i][$j] = $count;
    }
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//64.5
$arr = [];
$count = 2;

for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 3; $j++, $count += 2) {
        $arr[$i][$j] = $count;
    }
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//64.6
$arr = [];
$count = 1;

for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k < 2; $k++, $count++) {
            $arr[$i][$j][$k] = $count;
        }
    }
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';