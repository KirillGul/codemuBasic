<?php
session_start();
$_SESSION['auth'] = null;
unset($_SESSION['nameUser']);
header("Location:index.php");