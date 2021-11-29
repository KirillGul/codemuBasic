<?php
$host = 'localhost';
$loginDB = 'root';
$passwordDB = '';
$dbName = 'mydb';

return mysqli_connect($host, $loginDB, $passwordDB, $dbName);
