<?php
//include '../include.php';

//157.1
$name = 'file.php';

function getFile($name) {
    ob_start();
    include "$name";
    return ob_get_clean();
}

$result = getFile($name);

echo 'index' . $result;