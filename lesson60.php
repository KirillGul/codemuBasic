<?php
include 'include.php';

//60.1
$arr = [];
$str = '';

for ($i = 1; $i <=5; $i++) {
    $str .= 'xx';
    $arr[] = $str;
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//60.2
$arr = [];

for ($i = 1; $i <= 5; $i++) {
    $str = '';
    for ($j = 1; $j <= 5; $j++) {
        $str .= $i;
    }
    $arr[] = $str;
    
}
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';