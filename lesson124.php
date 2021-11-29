<?php
include 'include.php';

//124.1
$str1 = 'text1';
$str2 = 'text2';
$str3 = 'text3';
echo "<br>";
?>

<p><?= $str1 ?></p>
<p><?= $str2 ?></p>
<p><?= $str3 ?></p>

<?php
//124.2
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo "<br>";
?>

<p><?= $arr['a'] ?></p>
<p><?= $arr['b'] ?></p>
<p><?= $arr['c'] ?></p>