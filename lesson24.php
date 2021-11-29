<?php
include 'include.php';

//24.1
$num = 2;

if ($num > 0 and $num < 5) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.2
$num = 12;

if ($num >= 10 and $num <= 20) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.3
$num1 = 2;
$num2 = 3;

if ($num1 <= 1 and $num2 >= 3) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.4
$num1 = -10;
$num2 = -10;

if ($num1 >= 0 or $num2 >= 0) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.5
$num1 = 0;
$num2 = 0;

if ($num1 >= 0 or $num2 >= 0) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.6
$num1 = 0;
$num2 = 5;

if ($num1 >= 0 or $num2 >= 0) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.7
$num1 = 5;
$num2 = 5;

if ($num1 >= 0 or $num2 >= 0) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.8
$num1 = -5;
$num2 = 15;

if ($num1 >= 0 or $num2 >= 0) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.9
$num = 1;
	
if ($num == 0 or $num == 1) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.10
$num = 2;
	
if ($num == 0 or $num == 1) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.11
$num = 2;
	
if ($num == 0 or $num == 1 or $num == 2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.12
$num = 3;
		
if (($num > 5 and $num < 10) or $num == 20) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.13
$num = 3;
		
if ($num > 5 or ($num > 0 and $num < 3)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//24.14
$num = 3;
		
if ($num == 9 or ($num > 10 and $num < 20) or ($num > 20 and $num < 30)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';