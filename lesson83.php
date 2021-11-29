<?php
include 'include.php';

//83.1
function friendliness($num1, $num2) {
    return array_sum(isDeliteli($num1)) == array_sum(isDeliteli($num2));
}

function isDeliteli($num) {
    $arr = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $arr[] = $i;
        }
    }
    
    return $arr;
}
echo '<br>';

//83.2
for ($i = 1; $i <= 1000; $i++) {
    if (friendliness($i,$i+1)) {
        echo $i;
        echo ' - ';
        echo $i+1;
        echo '<br>';
    }
}
echo '<br>';

//83.3
function isPerfectNum($num) {
    return $num == array_sum(isDeliteli($num));
}
echo '<br>';

//83.4
function isTicket($int) {
    return $int[0]+$int[1]+$int[2] == $int[3]+$int[4]+$int[5];
}
echo '<br>';

//83.5
function getArrayDeliteli($int1, $int2) {
    return array_unique(array_merge(isDeliteli($int1), isDeliteli($int2)));
}
echo '<br>';

//83.6
function getTransit ($str) {
    $arr = ['a'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 
       'д'=>'d', 'е'=>'e', 'ё'=>'e', 'ж'=>'zh', 'з'=>'z', 
       'и'=>'i', 'й'=>'i', 'к'=>'k', 'л'=>'l', 'м'=>'m', 
       'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 
       'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'kh', 'ц'=>'ts', 
       'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shch', 'ъ'=>'ie', 'ы'=>'y', 
       'ь'=>'', 'э'=>'e', 'ю'=>'iu', 'я'=>'ia'];
 
    foreach (str_split($str) as $value) {
       $arrTranslit[] = $arr[$value]; 
    }
    return $arrTranslit;
}
echo '<br>';

//83.7
