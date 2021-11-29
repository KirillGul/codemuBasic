<?php
include 'include.php';

//122.1
$arr = [
    ['href'=>'page1.html', 'text'=>'text1'],
    ['href'=>'page2.html', 'text'=>'text2'],
    ['href'=>'page3.html', 'text'=>'text3'],
];

echo "<ul>";

foreach ($arr as $attr) {
    echo "<li><a href=\"$attr[href]\">$attr[text]</a></li>";
}

echo "</ul>";
echo '<br>';

//122.2
$arr = [
    ['value' => '1', 'text' => 'text1'],
    ['value' => '2', 'text' => 'text2'],
    ['value' => '3', 'text' => 'text3'],
];

echo "<select>";

foreach ($arr as $attr) {
    echo "<option value=\"$attr[value]\">$attr[text]</option >";
}

echo "</select>";
echo '<br>';