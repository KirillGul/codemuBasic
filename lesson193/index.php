<?php

session_start();

//193.1
/*if (isset($_SESSION['flash'])) {
    echo $_SESSION['flash'];
    unset($_SESSION['flash']);
}*/

//193.2
if (!empty($_SESSION['flash'])) {
    foreach ($_SESSION['flash'] as $value) {
        echo "$value<br>";
    }
    unset($_SESSION['flash']);
}