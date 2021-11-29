<?php
include 'include.php';

//136.1
if (!empty($_GET['num'])) {
    echo $_GET['num'];
}
echo "<br>";

//136.2
if (!empty($_GET['num'])) {
    echo pow($_GET['num'], 2);
}
echo "<br>";

//136.3
if (!empty($_GET['num']) and !empty($_GET['num2'])) {
    echo $_GET['num'] + $_GET['num2'];
}
echo "<br>";

//136.4
if (!empty($_GET['num'])) {
    if ($_GET['num'] == 1)
        echo 'hello';
    else
        echo 'bye';
}
echo "<br>";

//136.5
$arr = ['a', 'b', 'c', 'd', 'e'];
if (isset($_GET['num'])) {
    echo $arr[$_GET['num']];
}
echo "<br>";