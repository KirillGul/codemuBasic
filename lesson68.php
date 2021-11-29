<?php
include 'include.php';

//68.1
$str = 'php';
echo strtoupper($str);
echo '<br>';

//68.2
$str = 'PHP';
echo strtolower($str);
echo '<br>';

//68.3
$str = 'london';
echo ucfirst($str);
echo '<br>';

//68.4
$str = 'London';
echo strtolower($str);
echo '<br>';

//68.5
$str = 'london is the capital of great britain';
echo ucwords($str);
echo '<br>';

//68.6
$str = 'LONDON';
echo ucfirst(strtolower($str));
echo '<br>';

//68.7
$str = 'html css php';
echo strlen($str);
echo '<br>';

//68.8
$password = 'html css';
$strlen = strlen($password);
if ($strlen > 5 and $strlen < 10) {
    echo 'Пароль подходи';
} else {
    echo 'Придумайте новый пароль';
}
echo '<br>';

//68.9
$str = 'html css php';
echo substr($str, 0, 4);
echo '<br>';
echo substr($str, 5, 3);
echo '<br>';
echo substr($str, 9);
echo '<br>';

//68.10
$str = 'password';
echo substr($str, -3);
echo '<br>';

//68.11
$str = 'http://sait.com';
if (substr($str, 0, 7) === 'http://') {
    echo 'Да';
}
echo '<br>';

//68.12
$str = 'https://sait.com';
if (substr($str, 0, 7) === 'http://' or substr($str, 0, 8) === 'https://') {
    echo 'Да';
}
echo '<br>';

//68.13
$str = 'pict.png';
if (substr($str, -4) === '.png') {
    echo 'Да';
} else {
    echo 'Нет';
}
echo '<br>';

//68.14
$str = 'pict.jpg';
if (substr($str, -4) === '.png' or substr($str, -4) === '.jpg') {
    echo 'Да';
} else {
    echo 'Нет';
}
echo '<br>';

//68.15
$str = 'strstrstr';
if (strlen($str) < 5) {
    echo $str;
} else {
    $str = substr($str, 0, 5).'...';
    echo $str;
}
echo '<br>';

//68.16
$str = '31.12.2013';
echo str_replace('.', '-', $str);
echo '<br>';

//68.17
$str = 'aabbbccc';
echo str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
echo '<br>';

//68.18
$str = '1a2b3c4b5d6e7f8g9h0';
echo str_replace([1,2,3,4,5,6,7,8,9,0], '', $str);
echo '<br>';

//68.19
echo strtr('aabbbccc', ['a'=>'1', 'b'=>'2', 'c'=>'3']);
echo '<br>';
echo strtr('aabbbccc', 'abc', '123');
echo '<br>';

//68.20
echo substr_replace('aabbbccc', '!!!', 2, 5);
echo '<br>';

//68.21
$str = 'abc abc abc';
echo strpos($str, 'b');
echo '<br>';

//68.22
$str = 'abc abc abc';
echo strrpos($str, 'b');
echo '<br>';

//68.23
$str = 'abc abc abc';
echo strpos($str, 'b', 2);
echo '<br>';

//68.24
$str = 'aaa aaa aaa aaa aaa';
echo strpos($str, ' ', 4);
echo '<br>';

//68.25
$str = 'aa..aaa  aaa aaa aaa';
if (strpos($str, '..'))
    echo 'Есть';
else
    echo 'Нет';
echo '<br>';

//68.26
$str = 'http://aa..aaa  aaa aaa aaa';

if (strpos($str, 'http://', 0) == 0)
    echo 'Да';
else
    echo 'Нет';
echo '<br>';

//68.27
$str = 'html css php';
$arr = explode(' ', $str);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//68.28
$arr = ['html', 'css', 'php'];
$str = implode(',', $arr);
echo $str;
echo '<br>';

//68.29
$date = '14-02-2013';
$date = explode('-' ,$date);
$date = implode('.' ,$date);
echo $date;
echo '<br>';

//68.30
$str = '1234567890';
$arr = str_split($str, 2);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//68.31
$str = '1234567890';
$arr = str_split($str);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//68.32
$str = '1234567890';
$str = implode('-', str_split($str, 2));
echo $str;
echo '<br>';

//68.33
$str = ' 1234567890 ';
$str = trim($str);
var_dump($str);
echo '<br>';

//68.34
$str = '/php/';
$str = trim($str, '/');
var_dump($str);
echo '<br>';

//68.35
$str = 'слова слова слова';
$str = rtrim($str, '.').'.';
var_dump($str);
echo '<br>';

//68.36
$str = '12345';
$str = strrev($str);
var_dump($str);
echo '<br>';

//68.37
$str = 'madam';
if ($str === strrev($str)) {
    echo 'Слово полиндром';
} else {
    echo 'Слово не полиндром';
}
echo '<br>';

//68.38
$str = 'madam';
echo str_shuffle($str);
echo '<br>';

//68.39
$str = implode('', range('a','z'));
echo substr(str_shuffle($str), 1, 6);
echo '<br>';

//68.40
$str = '12345678';
echo number_format($str, 0, '.', ' ');
echo '<br>';

//68.41
for ($i = 1; $i < 10; $i++) {
    echo str_repeat('x', $i).'<br>';
}
echo '<br>';

//68.42
for ($i = 1; $i < 10; $i++) {
    echo str_repeat($i, $i).'<br>';
}
echo '<br>';

//68.43
$str = 'html, <b>php</b>, js';
echo $str;
echo '<br>';
echo strip_tags($str);
echo '<br>';

//68.44
$str = '<br>html, <b>php</b>, <i>js</i>';
echo $str;
echo '<br>';
echo strip_tags($str, '<b><i>');
echo '<br>';

//68.45
$str = 'html, <b>php</b>, js';
echo $str;
echo '<br>';
echo htmlspecialchars($str);
echo '<br>';

//68.46
echo ord('a');
echo '<br>';
echo ord('b');
echo '<br>';
echo ord('c');
echo '<br>';
echo ord(' ');
echo '<br>';

//68.48
echo chr(33);
echo '<br>';

//68.49
echo $str = chr(rand(65,90));
echo '<br>';

//68.50
$len = 20;
$str = '';
while ($len > 0) {
    $str .= chr(rand(97,122));
    $len--;
}
echo $str;
echo '<br>';

//68.51
$str = 'f';
if (ord($str) >= 65 && ord($str) <= 90) {
    echo "Большая";
} elseif (ord($str) >= 97 && ord($str) <= 122) {
    echo "Маленькая";
}
echo '<br>';

//68.52
$str = 'ab-cd-ef';
echo strchr($str, '-');
echo '<br>';

//68.53
$str = 'ab-cd-ef';
echo strrchr($str, '-');
echo '<br>';

//68.54
$str = 'ab--cd--ef';
echo strstr($str, '--');
echo '<br>';