<?php
include 'include.php';

//154.1
$path = 'lesson153/dir';

if (is_dir($path)) {
    echo "Да<br>";
}

//154.2
$path = 'lesson153/dir';

if (is_file($path)) {
    echo "Да<br>";
}

//154.3
$path = 'lesson152';

$files = array_diff(scandir($path), ['..', '.']);

foreach ($files as $file) {
    if (is_dir($path.'/'.$file)) {
        echo $file."<br>";
    }
}

//154.4
$path = 'lesson152';

$files = array_diff(scandir($path), ['..', '.']);

foreach ($files as $file) {
    if (is_file($path.'/'.$file)) {
        echo $file."<br>";
    }
}

//154.5
$path = 'lesson152';
$files = array_diff(scandir($path), ['..', '.']);

foreach ($files as $file) {
    $f = $path.'/'.$file;
    if (is_file($f)) {
        $text = file_get_contents($f);
        file_put_contents($f, time().'переписал из урока 154.5');
    }
}