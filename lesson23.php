<?php
include 'include.php';

//23.1
$test1 = '3';
$test2 = '3';
    
if ($test1 == $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//23.2
$test1 = '3';
$test2 = '3';
    
if ($test1 === $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//23.3
$test1 = 3;
$test2 = '3';
    
if ($test1 == $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//23.4
$test1 = 3;
$test2 = '3';
    
if ($test1 === $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//23.5
$test1 = 3;
$test2 = 3;
    
if ($test1 === $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//23.6
$test1 = '3';
$test2 = '3';
    
if ($test1 != $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//23.7
$test1 = '3';
$test2 = '3';
    
if ($test1 !== $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//23.8
$test1 = 3;
$test2 = '3';
    
if ($test1 != $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//23.9
$test1 = 3;
$test2 = '3';
    
if ($test1 !== $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//23.10
$test1 = 3;
$test2 = 2;
    
if ($test1 !== $test2) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';