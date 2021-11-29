<?php
include 'include.php';

//134.1
?>
<form action="" method="GET">
    Мужской: <input type="radio" name="WC" value="1" checked>
    <br>
    Женский: <input type="radio" name="WC" value="2">
    <br>
    <input type="submit">
</form>

<?php
if (!empty($_GET['WC'])) {
    if ($_GET['WC'] == 1)
        echo 'Мужской';
    else
        echo 'Женский';
}

//134.2
?>
<form action="" method="GET">
    <input type="hidden" name="lang" value="0" >
    Выберите язык:
    <br>    
    ru: <input type="radio" name="lang" value="1" <?php if (!empty($_GET['lang']) and $_GET['lang'] == 1) echo "checked";?>>
    <br>
    en: <input type="radio" name="lang" value="2" <?php if (!empty($_GET['lang']) and $_GET['lang'] == 2) echo "checked";?>>
    <br>
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    if (!empty($_GET['lang'])) {
        if ($_GET['lang'] == 1)
            echo 'ru';
        else
            echo 'en';
    }
}