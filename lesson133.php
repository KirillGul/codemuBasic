<?php
include 'include.php';

//133.1
?>
<form action="" method="GET">
    Ваше имя: <input name="name">
    <input type="checkbox" name="flag">
    <input type="submit">
</form>

<?php
if (!empty($_GET['name'])) {
    if (isset($_GET['flag'])) {
        echo "Привет, $_GET[name]";
    } else {
        echo "Пока, $_GET[name]";
    }
}

//133.2
?>
<form action="" method="GET">
    <input type="hidden" name="flag" value="0">
    Ваш возраст больше 18 лет: <input type="checkbox" name="flag" value="1">
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    if (!empty($_GET['flag']) == 1) {
        echo "Отмечен";
    } else {
        echo "Не отмечен";
    }
}

//133.3
?>
<form action="" method="GET">
    <input type="hidden" name="flag1" value="0">
    <input type="hidden" name="flag2" value="0">
    <input type="hidden" name="flag3" value="0">
    Чек 1: <input type="checkbox" name="flag1" value="1" <?php if (!empty($_GET['flag1'])) echo "checked";?>>
    Чек 2: <input type="checkbox" name="flag2" value="1" <?php if (!empty($_GET['flag2'])) echo "checked";?>>
    Чек 3: <input type="checkbox" name="flag3" value="1" <?php if (!empty($_GET['flag3'])) echo "checked";?>>
    <input type="submit">
</form>