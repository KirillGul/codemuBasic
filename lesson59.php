<?php
include 'include.php';

//59.1
$str = '';

for ($i=1; $i <= 5; $i++) {
    echo $str .= 'xx';
    echo '<br>';
}
echo '<br>';

//59.2
for ($i=1; $i <= 9; $i += 2) {
    for ($j=$i; $j >= 1; $j--) {
        echo $i;    
    }
    echo '<br>';
}
echo '<br>';

//59.3
for ($i = 10; $i > 1; $i -= 2) {
    for ($j=$i; $j >= 1; $j--) {
        echo 'x';
    }
    echo '<br>';
}
echo '<br>';

//59.4
for ($i = 9; $i >= 1; $i--) {
    for ($j=$i; $j >= 1; $j--) {
        echo $i;
    }
    echo '<br>';
}
echo '<br>';