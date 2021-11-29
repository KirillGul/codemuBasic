<?php
include 'include.php';

//126.1
?>
<ul>
<?php for ($i = 1; $i <= 5; $i++) { ?>
	<li><?= $i ?></li>
<?php } ?>
</ul>

<?php
//126.2
$arr = ['user1', 'user2', 'user3'];

foreach ($arr as $value) {
?>

    <div>
	<h2><?= $value ?></h2>
	<p>text</p>
</div>

<?php } ?>

<?php
//126.3
$arr = [
    [
        'name' => 'user1',
        'age'  => 30,
    ],
    [
        'name' => 'user2',
        'age'  => 31,
    ],
    [
        'name' => 'user3',
        'age'  => 32,
    ],
];

foreach ($arr as $user) { ?>
    <div>
        <?php foreach ($user as $key=>$value) { ?>
	        <p><?= $key .':'. $value ?></p>
        <?php } ?>
    </div>
<?php } ?>