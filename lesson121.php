<?php
include 'include.php';

//121.1
echo "<ul>";
for ($i = 1; $i <= 5; $i++) {
    echo "<li>$i</li>";
}
echo "</ul>";
echo '<br>';

//121.2
$arr = ['text1', 'text2', 'text3'];
echo "<select>";
foreach ($arr as $value) {
    echo "<option>$value</option>";
}
echo "</select>";
echo '<br>';