<?php
include 'include.php';

//119.1
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "nums: $i $j'<br>";
    }
}
echo '<br>';

//119.2
$arr = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($arr as $key => $elem) {
    echo "pair: $elem $key<br>";
}
echo '<br>';

//119.3
$products = [
    [
        'name'   => 'product1',
        'price'  => 100,
        'amount' => 5,
    ],
    [
        'name'   => 'product2',
        'price'  => 200,
        'amount' => 6,
    ],
    [
        'name'   => 'product3',
        'price'  => 300,
        'amount' => 7,
    ],
];

foreach ($products as $product) {
    echo "name: $product[name] - price: $product[price] - amount: $product[amount]<br>";
}
echo '<br>';