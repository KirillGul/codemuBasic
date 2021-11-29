<?php
include 'include.php';

//128.1 ?>
<form method="GET">
    <input name="text1">
    <input name="text2">
    <input name="text3">
    <input type="submit">
</form>
<?php
if (!empty($_GET['text1']) and !empty($_GET['text2']) and !empty($_GET['text3'])) {
    echo $_GET['text1'] + $_GET['text2'] + $_GET['text3'];
}
echo "<br>";

//128.2 ?>
<form action="lesson128_Result.php" method="POST">
    Ваше имя: <input name="name">
    Ваш возраст: <input name="year">
    <input type="submit">
</form>
<?php
echo "<br>";

//128.3 ?>
<form action="lesson128_Result.php" method="POST">
    <input type="password" name="pass">
    <input type="submit">
</form>
<?php
echo "<br>";

//128.4 ?>
<form action="lesson128_Result.php" method="POST">
    Введиет ваш год рождения: <input type="text" name="year">
    Введиет ваш месяц рождения: <input type="text" name="month">
    Введиет ваш день рождения: <input type="text" name="day">
    <input type="submit">
</form>
<?php
echo "<br>";