<?php
include 'include.php';

//33.1
$num = 1;

switch ($num) {
    case '1':
        echo 'Зима';
        break;
    case '2':
        echo 'Весна';
        break;
    case '3':
        echo 'Лето';
        break;
    case '4':
        echo 'Осень';
        break;
}
echo '<br>';

//34.1
$num = 1;

echo $result = $num >= 0 ? 1 : -1;
echo '<br>';

//35.1
$user = ['name' => 'john', 'age' => 30];

$name = $user['name'] ?? 'unknown';
echo $name;	
echo '<br>';

//35.2
$user = ['name' => 'john', 'age' => 30];

$name = $user['name'] ?? $user['surname'] ?? 'unknown';
echo $name;	
echo '<br>';