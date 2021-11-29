<?php
include 'include.php';

//131.1
?>
<form action="" method="GET">
    Введите вашу страну: <input name="country" value="<?php if (isset($_GET['country'])) echo $_GET['country'] ?>">
    Введите ваш город: <input name="city" value="<?php if (isset($_GET['city'])) echo $_GET['city'] ?>">
    <input type="submit">
</form>

<?php
//131.2
?>
<form action="" method="GET">
    Введите год: <input name="year" value="<?php 
    if (isset($_GET['year']))
            echo $_GET['year'];
        else
            echo date('Y', time());
    ?>">
    <input type="submit">
</form>

<?php
if (!empty($_GET['year'])) {
    if ($_GET['year'] % 4 == 0 && ($_GET['year'] % 100 != 0 || $_GET['year'] % 400 == 0)) {
        echo 'Год высокосный';
    } else {
        echo 'Год не высокосный';
    }
}

//131.3
?>
<form action="" method="GET">
    Введите год: <input name="year" value="<?=$_GET['year'] ?? date('Y', time());?>">
    Введите месяц: <input name="month" value="<?=$_GET['month'] ?? date('m', time());?>">
    Введите день: <input name="day" value="<?=$_GET['day'] ?? date('d', time());?>">
    <input type="submit">
</form>

<?php
$newYearDay = (mktime(0, 0, 0, 12, 31) - mktime(0, 0, 0, $_GET['month'], $_GET['day'], $_GET['year'])) / 60 / 60 / 24;
echo $newYearDay + 1;
?>