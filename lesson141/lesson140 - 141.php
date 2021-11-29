<?php
session_start();

//140.1 - 141.1
include '../include.php';

if (!isset($_SESSION['counter']) or $_SESSION['counter'] == 10) {
    unset($_SESSION['counter']);
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}

echo $_SESSION['counter'];

echo "<br>";
?>
<a href="logout.php">logout</a>
