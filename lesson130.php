<?php
include 'include.php';

//130.1 
if (empty($_GET['name'])) {
?>
    <form method="GET">
        Введите ваше имя: <input name="name">
        <input type="submit">
    </form>

<?php 
} else {
    echo $_GET['name'];
}
?>