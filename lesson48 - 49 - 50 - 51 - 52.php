<?php
include 'include.php';

//48.1
$arr = ['a', 'b', 'c', 'd', 'e'];
$flag = false;

foreach ($arr as $value) {
    if ($value === 'c')
        $flag = true;
}

if ($flag)
    echo 'Есть';
else
    echo 'Нет';
echo '<br>';

//49.1
$num = 31;
$flag = true;

for ($i = 2; $i < $num; $i++) {
    if ($num % $i === 0) {
        $flag = false;
        break;
    }
}

if ($flag)
    echo 'Простое';
else
    echo 'Не простое';
echo '<br>';

//50.1
$num = 31;
$i = 0;
while ($num < 1000) {
    $num *= 3;
    $i++;
}
echo $i;
echo '<br>';

//50.2
for ($num = 31, $i = 0; $num < 1000; $i++, $num *= 3);
echo $i;
echo '<br>';

//51.1
for ($str = '', $i = 0; $i < 5; $i++, $str .= '0');
echo $str;
echo '<br>';

//51.2
for ($str = '', $i = 1; $i <= 9; $str .= $i, $i++);
echo $str;
echo '<br>';

//51.3
for ($str = '', $i = 9; $i >= 1; $str .= $i, $i--);
echo $str;
echo '<br>';

//51.4
for ($str = '-', $i = 1; $i <= 9; $str .= $i.'-', $i++);
echo $str;
echo '<br>';

//52.1
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i;
    }
}
echo '<br>';

//52.2
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 3; $j++) {
        echo $i.''.$j.' ';
    }
}
echo '<br>';

