<?php
include 'include.php';

//40.1
for ($i = 1, $result = 1; $i <= 20; $i++)
    $result *= $i;
echo $result;
echo '<br>';

//40.2
for ($i = 2, $sum = 1; $i <= 100; $i += 2)
    $sum += $i;
echo $sum;
echo '<br>';

//40.2
for ($i = 1, $sum = 1; $i <= 99; $i += 2)
    $sum += $i;
echo $sum;
echo '<br>';