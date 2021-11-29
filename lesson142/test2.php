<?php
session_start();

//142.1
include '../include.php';

if (!empty($_SESSION)) {
    echo $_SESSION['name']."<br>";
    echo $_SESSION['surname']."<br>";
    echo $_SESSION['year'];
}