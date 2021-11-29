<?php
include 'include.php';

//69.1
$arr = [1, 2, 3, 4, 5];
echo in_array(3, $arr);
echo '<br>';

//69.2
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr);
echo '<br>';

//69.3
$arr = [1, 2, 3, 4, 5];
echo array_product($arr);
echo '<br>';

//69.4
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr) / count($arr);
echo '<br>';

//69.5
$arr = [];
$arr = range (1,100);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.6
$arr = [];
$arr = range ('a','z');
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.7
$arr = [];
$arr = range (1, 9);
$str = implode('-', $arr);
echo $str;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.8
$arr = [];
$arr = range (1, 100);
echo array_sum ($arr);
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.9
$arr = [];
$arr = range (1, 10);
echo array_product ($arr);
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.10
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
$arr = array_merge($arr1, $arr2);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.11
$arr = [1, 2, 3, 4, 5];
$result = array_slice($arr, 1, 3);
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//69.12
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 2);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.13
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 0, 1);
array_splice($arr, -1);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.14
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 2, 0, ['a', 'b', 'c']);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.15
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1, 0, ['a', 'b']);
array_splice($arr, 6, 0, ['c']);
array_splice($arr, -1, 0, ['e']);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.16
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($arr);
$values = array_values($arr);
echo '<pre>'; print_r($keys); echo '</pre>';
echo '<pre>'; print_r($values); echo '</pre>';
echo '<br>';

//69.17
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
$combimie = array_combine($arr1, $arr2);
echo '<pre>'; print_r($combimie); echo '</pre>';
echo '<br>';

//69.18
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$arr = array_flip($arr);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.19
$arr = [1, 2, 3, 4, 5];
$arr = array_reverse($arr);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.20
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search('-', $arr);
echo '<br>';

//69.21
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
array_splice($arr, array_search('-', $arr), 1);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.22
$arr = ['a', 'b', 'c', 'd', 'e'];
$result = array_replace($arr, [0 => '!', 3 => '!!']);
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//69.23
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
arsort($arr);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.24
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo array_rand($arr);
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.25
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo $arr[array_rand($arr)];
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.26
$arr = [1, 2, 3, 4, 5];
shuffle($arr);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.27
$arr = range(1,25);
shuffle($arr);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.28
$arr = range('a', 'z');
shuffle($arr);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.29
$arr = range('a', 'z');
shuffle($arr);
$str = implode('', array_slice($arr, 0, 6));
echo $str;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.30
$arr = ['a', 'b', 'c', 'b', 'a'];
$result = array_unique($arr);
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//69.31
$arr = [1, 2, 3, 4, 5];
echo array_shift($arr);
echo array_pop($arr);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.32
$arr = [1, 2, 3, 4, 5];
echo array_unshift($arr, 0);
echo array_push($arr, 6);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.33
$arr = ['a', 'b', 'c'];
$arr = array_pad($arr, 6, '-');
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.34
$arr = [];
$arr = array_fill(0, 10, 'x');
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.35
$arr = range(1,20);
$arr = array_chunk($arr, 5);
echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//69.36
$arr = ['a', 'b', 'c', 'b', 'a'];
$result = array_count_values($arr);
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//69.37
$arr = [1, 2, 3, 4, 5];
$result = array_map('sqrt', $arr);
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//69.38
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$result = array_intersect($arr1, $arr2);
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//69.39
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
$result = array_diff($arr1, $arr2);
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';