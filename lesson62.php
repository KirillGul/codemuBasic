<?php
include 'include.php';

//62.1
$arr = [
    ['a', 'b', 'c'],
    ['d', 'e', 'f'],
    ['g', 'h', 'i'],
    ['j', 'k', 'l'],
];

echo $arr[3][2];
echo $arr[1][1];
echo $arr[2][0];
echo $arr[0][0];
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//62.2
$arr = [[1, 2], [3, 4], [5, 6]];

$sum = $arr[0][0] + $arr[0][1] + $arr[1][0] + $arr[1][1] + $arr[2][0] + $arr[2][1];
echo $sum;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//62.3
$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];

$sum = $arr[0][0][0] + $arr[0][0][1] + $arr[0][1][0] + $arr[0][1][1] + $arr[1][0][0] + $arr[1][0][1] + $arr[1][1][0] + $arr[1][1][1];
echo $sum;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//62.4
$arr = [
    'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
    'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
];

echo $arr['boys'][1];
echo '<br>';
echo $arr['girls'][2];
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//62.5
$arr = [
    'ru' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
];

echo $arr['en'][2];
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//62.6
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];

$sum = $arr[0]['salary'] + $arr[2]['salary'];
echo $sum;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';

//62.7
$arr = [
            [1, 2, 3, 
                [4, 5, 
                    [6, 7]
                ]
            ], 
            [8, 
                [9, 10]
            ]
        ];

$sum = $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3][0] + $arr[0][3][1] + $arr[0][3][2][0] + $arr[0][3][2][1] + $arr[1][0] + $arr[1][1][0] + $arr[1][1][1];
echo $sum;
//echo '<pre>'; print_r($arr); echo '</pre>';
echo '<br>';