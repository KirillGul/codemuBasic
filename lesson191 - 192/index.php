<?php
//191.1
//header('Location: page.php');

//192.1 - 2
//$_GET['success'] = 1;

if (!isset($_GET['success'])) {
    echo "success - передался";
}