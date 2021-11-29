<?php
include '../include.php';

//148.1
$sum = file_get_contents('1.txt') + file_get_contents('2.txt');
echo $sum;

//148.2
$arr = [1,2,3,4,5];

$sum = array_sum($arr);
file_put_contents('sum.txt', $sum);

//148.3
$num = file_get_contents('sum.txt');
file_put_contents('sum.txt', $num ** 2);

//148.4
$count = file_get_contents('count.txt');
file_put_contents('count.txt', ++$count);

//148.5
$arrFile = [
    '1.txt',
    '2.txt',
    '3.txt'
];

$text = '';
foreach ($arrFile as $namefile) {
    $text .= file_get_contents($namefile);
}

file_put_contents('new.txt', $text);