<?php
include 'include.php';

//123.1
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

echo '<table>';
foreach ($products as $product) {
    echo '<tr>';
    foreach ($product as $cell) {
        echo "<td>$cell</td>";
    }
    echo '</tr>';
}
echo '</table>';
echo "<br>";