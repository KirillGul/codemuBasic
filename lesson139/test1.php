<?php
session_start();
$_SESSION['num1'] = '2';
$_SESSION['num2'] = '3';

echo "<pre>"; print_r($_SESSION); echo "</pre>";