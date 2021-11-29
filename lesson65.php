<?php
include 'include.php';

//65.1
$products = [
    [
        'name'   => 'мясо',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'овощи',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'фрукты',
        'price'  => 300,
        'amount' => 7,
    ],
];

foreach ($products as $value) {
    echo $value['name'].' - цена:'.$value['price'].'; сколько:'.$value['amount'].'<br>';
}
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//65.2
$users = [
    [
        'name'   => 'user1',
        'age'    => 31,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 32,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 33,
        'salary' => 3000,
    ],
];

$users[] = [
    'name'   => 'name4',
    'age'    => 34,
    'salary' => 4000,
];
echo '<pre>'; print_r($users); echo '</pre>';
echo '<br>';