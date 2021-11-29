<?php
session_start();

//142.1
include '../include.php';

if (isset($_SESSION['user'])) {
    echo "<ul>";
        foreach ($_SESSION['user'] as $value) {
            echo "<li>$value</li>";
        }
    echo "</ul>";
}