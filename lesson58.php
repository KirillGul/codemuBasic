<?php
include 'include.php';

//58.1
$one = 0;
$two = 1;

for ($i=1; $i < 10; $i++) {
    $curent = $one + $two;

    $one = $two;
    $two = $curent;

    echo $curent;
    echo '<br>';
}
echo '<br>';

//58.1
$one = 0;
$two = 1;
$three = 2;

for ($i=1; $i < 10; $i++) {
    $curent = $one + $two + $three;

    $one = $two;
    $two = $three;
    $three = $curent;

    echo $curent;
    echo '<br>';
}
echo '<br>';