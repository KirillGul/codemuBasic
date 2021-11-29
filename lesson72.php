<?php
include 'include.php';

//72.1
function name() {
    echo 'Вова';
}

name();
echo '<br>';

//72.2
function sum() {
    echo array_sum(range(1,100));
}

sum();
echo '<br>';