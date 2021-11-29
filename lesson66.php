<?php
include 'include.php';

//66.1
$arr = [
	[
		'country' => 'Россия',
		'city' =>    'Москва',
	],
	[
		'country' => 'Беларусь',
		'city' =>    'Минск',
	],
	[
		'country' => 'Россия',
		'city' =>    'Питер',
	],
	[
		'country' => 'Россия',
		'city' =>    'Владивосток',
	],
	[
		'country' => 'Украина',
		'city' =>    'Львов',
	],
	[
		'country' => 'Беларусь',
		'city' =>    'Могилев',
	],
	[
		'country' => 'Украина',
		'city' =>    'Киев',
	],
];

$result = [];

foreach ($arr as $value) {
    $result[$value['country']][] = $value['city'];
}
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//66.2
$arr = [
	[
		'date'  => '2019-12-29',
		'event' => 'name1'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name2'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name3'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name4'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name5'
	],
	[
		'date'  => '2019-12-31',
		'event' => 'name6'
	],
	[
		'date'  => '2019-12-29',
		'event' => 'name7'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name8'
	],
	[
		'date'  => '2019-12-30',
		'event' => 'name9'
	],
];

$result = [];

foreach ($arr as $value) {
    $result[$value['date']][] = $value['event'];
}
echo '<pre>'; print_r($result); echo '</pre>';
echo '<br>';

//66.3
$result3 = [];
foreach ($result as $key=>$value) {
    foreach ($value as $subvalue) {
        $result3[] = ['date'=>$key, 'event'=>$subvalue];
    }
}
echo '<pre>'; print_r($result3); echo '</pre>';
echo '<br>';