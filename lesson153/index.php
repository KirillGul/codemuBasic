<?php
include '../include.php';

//153.1
$arrFiles = array_diff(scandir('dir'), ['..', '.']);

foreach ($arrFiles as $file) {
    echo "$file<br>";
}

//153.2
$arrFiles = array_diff(scandir('dir'), ['..', '.']);

foreach ($arrFiles as $file) {
    echo file_get_contents('dir/'.$file).'<br>';
}

//153.3
$arrFiles = array_diff(scandir('dir'), ['..', '.']);

foreach ($arrFiles as $file) {
    $text = file_get_contents('dir/'.$file);
    file_put_contents('dir/'.$file, $text.'!').'<br>';
}