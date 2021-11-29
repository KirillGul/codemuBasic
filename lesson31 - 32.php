<?php
include 'include.php';

//31.1
$min = 10;
if ($min >= 0 and $min <= 20) {
    echo '1 треть';
}
if ($min >= 21 and $min <= 40) {
    echo '2 треть';
}
if ($min >= 41 and $min <= 59) {
    echo '3 треть';
}
echo '<br>';

//31.2
$arr = [1,2,3];
if (count($arr) === 3) {
    echo $arr[0] + $arr[1] + $arr[2];
}
echo '<br>';

//31.3
$num = 2;
if ($num % 2 === 0) {
    echo 'Четное';
} else {
    echo 'Не четное';
}
echo '<br>';


//31.4
$num = 9;
if ($num % 3 === 0) {
    echo 'Делиться';
} else {
    echo 'Не делиться';
}
echo '<br>';

//32.1
$month = 9;
if ($month === 12 or $month === 1 or $month === 2) {
    echo 'Зима';
} elseif ($month >= 3 and $month <= 5) {
    echo 'Весна';
} elseif ($month >= 6 and $month <= 8) {
    echo 'Лето';
} elseif ($month >= 9 and $month <= 11) {
    echo 'Осень';
}
echo '<br>';

//32.2
$str = 'abcde';
if ($str[0] === 'a') {
    echo 'Да';
}
echo '<br>';

//32.3
$num = 12345;
$num .= '';
if ($num[0] == 1 or $num[0] == 2 or $num[0] == 3) {
    echo 'Да';
}
echo '<br>';

//32.3
$num = 123;
$num .= '';
echo $num[0] + $num[1] + $num[2];
echo '<br>';

//32.4
$num = 123124;
$num .= '';
if ($num[0] + $num[1] + $num[2] === $num[3] + $num[4] + $num[5]) {
    echo 'Да равно';
}
echo '<br>';
