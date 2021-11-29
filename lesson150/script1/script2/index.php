<?php
include '../../../include.php';

$path = $_SERVER['DOCUMENT_ROOT'];
echo file_get_contents($path."/lesson150/dir/test.txt");