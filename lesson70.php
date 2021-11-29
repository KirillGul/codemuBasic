<?php
include 'include.php';

//70.1
echo time();
echo '<br>';

//70.2
echo mktime(0,0,0,3,1,2025);
echo '<br>';

//70.3
echo mktime(0,0,0,12,31);
echo '<br>';

//70.4
echo time() - mktime(13,12,59,3,15,2000);
echo '<br>';

//70.5
echo (time() - mktime(7,23,48)) / 60 / 60;
echo '<br>';

//70.6
echo date('Y-m-d h-m-s', time());
echo '<br>';

//70.7
echo date('Y-m-d', time()).'<br>';
echo date('d.m.Y', time()).'<br>';
echo date('d.m.y, h:m:s', time());
echo '<br>';

//70.8
echo date('d.m.Y', mktime(0,0,0,2,12,2025));
echo '<br>';

//70.9
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
echo $week[date('w', time())].'<br>';
echo $week[date('w', mktime(0,0,0,6,6,2006))].'<br>';
echo $week[date('w', mktime(0,0,0,2,14,1984))];
echo '<br>';

//70.10
$month = [1=>'янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
echo $month[date('n', time())];
echo '<br>';

//70.11
echo date('t', time());
echo '<br>';

//70.12
echo date('d-m-Y', strtotime('2025-12-31'));
echo '<br>';

//70.13
$date = '2025-12-31';
$date = date_create($date);
date_modify($date, '2 days');
date_modify($date, '1 month 3 days');
date_modify($date, '1 year');
date_modify($date, '-3 days');
echo date_format($date, 'd.m.Y');
echo '<br>';

//70.14
//echo (mktime(23,59,59,12,31) - time()) / 60 / 60 /24;
echo date('z', mktime(0,0,0, 12, 31)) - date('z', time()) +1; //плюс 1 день
echo '<br>';

//70.15
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', ];
$year = '2021';
$arr = [];

for($i=1; $i<=12; $i++) {
    $t = mktime(0,0,0, $i, 13, $year);
    $time = date('w', mktime(0,0,0, $i, 13, $year));
    if ($week[$time] == 'пт') $arr = $year."-".$i."-13";
}

echo "<pre>";
var_dump($arr);
echo "</pre>";
echo '<br>';

//70.16
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
$tnow = date("Y-m-d", time());
$tmod = date_create($tnow);
date_modify($tmod, '-100 days');
$tmod = date_format($tmod, 'd.m.Y');

echo $week[date("w", strtotime($tmod))];
echo '<br>';