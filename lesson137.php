<?php
include 'include.php';

//137.1
?>
<a href="?num=1">Ссылка 1</a>
<a href="?num=2">Ссылка 2</a>
<a href="?num=3">Ссылка 3</a>
<br>

<?php
if (isset($_GET['num'])) {
    echo $_GET['num'];
}
echo "<br>";

//137.2
for ($i = 1; $i <= 10; $i++) { 
?>
    <a href="?num2=<?= $i ?>">Ссылка <?= $i ?></a>
    <br>
<?php
}
if (isset($_GET['num2'])) {
    echo $_GET['num2'];
}
echo "<br>";

//137.3
$arr = ['a', 'b', 'c', 'd', 'e'];

foreach ($arr as $key=>$value) { 
    ?>
    <a href="?num3=<?= $value ?>">Ссылка <?= $key ?></a>
    <br>
<?php
}
if (isset($_GET['num3'])) {
    echo $_GET['num3'];
}
echo "<br>";