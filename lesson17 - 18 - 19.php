<?php
include 'include.php';

//17.1
$arr = [7 => 'value1', 50 => 'value2', 23 => 'value3'];
echo '<pre>'; var_dump($arr); echo '</pre>';

//18.1
$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr).'<br>';

//18.2
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo count($arr).'<br>';

//18.3
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[count($arr)-1].'<br>';

//18.4
$arr = ['a', 'b', 'c', 'd', 'e'];
echo $arr[count($arr)-2].'<br>';

//19.1
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr['a'] = 5;
$arr['b'] = 4;
$arr['c'] = 3;
echo '<pre>'; var_dump($arr); echo '</pre>';


//19.2
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr['a'] += 3;
$arr['b'] += 3;
$arr['c'] += 3;
echo '<pre>'; var_dump($arr); echo '</pre>';

//19.3
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr['a']++;
$arr['a']++;
$arr['b']--;
$arr['c']--;
$arr['c']--;
echo '<pre>'; var_dump($arr); echo '</pre>';
