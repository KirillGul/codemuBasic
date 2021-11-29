<?php
include '../include.php';

//151.1
rename ("old.txt", "new.txt");

//151.2
rename ("file.txt", "dir/file.txt");

//151.3
rename ("dir1/file.txt", "dir2/file.txt");

//151.4
for ($i = 1; $i <= 5; $i++) {
    copy("copy.txt", 'copy/'.$i.".txt");
}

//151.5
$arr = ['1.txt', '2.txt', '3.txt'];

foreach ($arr as $file) {
    unlink($file);
}

//151.6
echo "<br>";
echo filesize("index.php");

//151.7
echo "<br>";
echo filesize("index.php") / 1024;

//151.8
echo "<br>";
echo filesize("GNOME.png") / (1024 * 1024);

//151.9
echo "<br>";
echo "Это лишнее";

//151.10
echo "<br>";

if (file_exists('file.txt')) {
    echo "Да";
} else {
    echo "Нет";
}

//151.11
echo "<br>";
$nameFile = 'file.txt';

if (file_exists($nameFile)) {
    echo "Да";
} else {
    file_put_contents($nameFile, '!');
}

//151.12
echo "<br>";
$nameFile = 'message.txt';

if (file_exists($nameFile)) {
    echo file_put_contents($nameFile);
}