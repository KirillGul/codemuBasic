<?php
include 'include.php';

//73.1
function kub($num) {
    echo pow($num, 3);
}

kub(2);
echo '<br>';

//73.2
function positive($num) {
    if ($num >= 0)
        echo '+++';
    else
        echo '---';
}

positive(2);
echo '<br>';

//73.3
function func3($num1, $num2, $num3) {
    echo $num1 + $num2 + $num3;
}

func3(1,2,3);
echo '<br>';

//73.4
function func4($num1, $num2, $num3) {
    echo $num1 + $num2 + $num3;
}

$param1 = 1;
$param2 = 2;
$param3 = 3;

func4($param1, $param2, $param3);
echo '<br>';

//73.5
function func5($num = 5) {
    echo $num * $num;
}

func5(2);
func5(3);
func5();
echo '<br>';

//73.6
function func6($num1 = 0, $num2 = 0) {
    echo $num1 + $num2;
}

func6(2, 3);
func6(3);
func6();
echo '<br>';