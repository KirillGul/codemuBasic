<?php
include 'include.php';

//135.1
?>

<form action="" method="GET">
    Выбери страну проживания:
    <select name="sel">
        <option>Россия</option>
        <option>Молдова</option>
        <option>USA</option>
    </select>
    <input type="submit">
</form>

<?php
//135.3-4
?>

<form action="" method="GET">
    Выбери язык:
    <select name="lang">
        <option value="1" <?php if (!empty($_GET) and $_GET['lang'] == 1) echo "selected";?>>ru</option>
        <option value="2" <?php if (!empty($_GET) and $_GET['lang'] == 2) echo "selected";?>>mol</option>
        <option value="3" <?php if (!empty($_GET) and $_GET['lang'] == 3) echo "selected";?>>en</option>
    </select>
    <input type="submit">
</form>