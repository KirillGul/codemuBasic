<?php
include 'include.php';

//15.1
$arr = ['a', 'b', 'c'];
echo $arr;
var_dump($arr);
echo '<br>';

//15.2
$arr = ['a', 'b', 'c'];
echo $arr[0];
echo $arr[1];
echo $arr[2];
echo '<br>';

//15.3
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0].'+'.$arr[1].'+'.$arr[2].'+'.$arr[3];
echo '<br>';

//15.4
$arr = [1, 2, 3];
echo $arr[0]+$arr[1]+$arr[2];
echo '<br>';

//15.5
$arr = [2, 5, 3, 9];
$result = $arr[0]*$arr[1]+$arr[2]*$arr[3];
echo $result;
echo '<br>';

//16.1
$arr = [1=>'a', 2=>'b', 3=>'c'];
echo $arr[1];
echo $arr[2];
echo $arr[3];
echo '<br>';

//16.2
$arr = [1=>'янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
echo '<br>';

//16.3
$user = ['name'=>'Иван', 'surname'=>'Иванов', 'patronymic'=>'Иванович'];
echo $user['name'].' '.$user['surname'].' '.$user['patronymic'];
echo '<br>';

//16.4
$date = ['year'=>'2021', 'month'=>'09', 'day'=>'08'];
echo $date['year'].'-'.$date['month'].'-'.$date['day'];
echo '<br>';