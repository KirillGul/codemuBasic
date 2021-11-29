<?php
include 'include.php';

//13.1
$num = 1;
$num = $num + 1;
$num = $num + 1;
echo $num;
echo '<br>';

//13.2
$num = 1;
$num = $num + 2;
$num = $num + 3;
echo $num;
echo '<br>';

//13.3
$num = 47;
$num += 7;
$num -= 18;
$num *= 10;
$num /= 15;
echo $num;
echo '<br>';

//13.4
$str = 'a';
$str .= 'b';
$str .= 'c';
echo $str;
echo '<br>';

//14.1
$num = 10;
$num++;
$num++;
$num--;
echo $num;
echo '<br>';

//14.2
$num = 3;
echo ++$num;
echo '<br>';

//14.3
$num = 3;
echo $num++;
echo '<br>';

//14.4
$num = 3;
echo --$num;
echo '<br>';

//14.5
$num = 3;
echo $num--;
echo '<br>';

//14.6
$num1 = 3;
$num2 = ++$num1;
echo $num1;
echo $num2;
echo '<br>';

//14.7
$num1 = 3;
$num2 = $num1++;
echo $num1;
echo $num2;
echo '<br>';

//14.8
$num1 = 3;
$num2 = --$num1;
echo $num1;
echo $num2;
echo '<br>';

//14.9
$num1 = 3;
$num2 = $num1--;
echo $num1;
echo $num2;
echo '<br>';

//14.10
$num1 = 3;
$num1++;
$num2 = $num1--;
echo $num1++;
echo --$num2;
echo '<br>';