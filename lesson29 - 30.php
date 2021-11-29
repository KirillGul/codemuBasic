<?php
include 'include.php';

//29.1
$test = 10;
	
if ($test == 10) {
    echo 'Верно';
}
echo '<br>';

//29.2
if ($test == 0)
    echo 'верно';
else
    echo 'неверно!';
echo '<br>';

//29.3
if ($test == 0)
    echo 'верно';
echo '<br>';

//30.1
$day = 5;
if ($day >= 1 and $day <= 10)
    echo '1-ая декада';
if ($day >= 11 and $day <= 20)
    echo '2-ая декада';
if ($day >= 21 and $day <= 31)
    echo '3-ая декада';
echo '<br>';

//30.2
$day = 5;
if ($day >= 1 and $day <= 10)
    echo '1-ая декада';
elseif ($day >= 11 and $day <= 20)
    echo '2-ая декада';
elseif ($day >= 21 and $day <= 31)
    echo '3-ая декада';
echo '<br>';

//30.3
$day = 5;
if ($day >= 1 and $day <= 10)
    echo '1-ая декада';
elseif ($day >= 11 and $day <= 20)
    echo '2-ая декада';
elseif ($day >= 21 and $day <= 31)
    echo '3-ая декада';
else
    echo 'Значение не попадает не в одну из декад';
echo '<br>';

//30.4
$age = 175;
if ($age < 10 or $age > 99) {
    echo 'Число меньше 10 или больше 99<br>';
    $sumNum = array_sum(str_split($age, 1));
    if ($sumNum <= 9)
        echo 'Сумма цифр однозначная';
    else
        echo 'Сумма цифр двухзначная';
}
echo '<br>';