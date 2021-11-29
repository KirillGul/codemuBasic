<?php
include '../../../../include.php';

$path = $_SERVER['DOCUMENT_ROOT'];
echo file_get_contents($path."/lesson150/dir1/dir2/dir3/test.txt");