<?php
session_start();
echo $_SESSION['num1'] + $_SESSION['num2'];

echo "<br>";
echo "<pre>"; print_r($_SESSION); echo "</pre>";