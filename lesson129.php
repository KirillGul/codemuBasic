<?php
include 'include.php';

//129.1 ?>
<form action="" method="GET">
	Фамилия: <input name="surname">
	Имя: <input name="name">
	Отчество: <input type="text" name="surname2">
    <input type="submit">
</form>

<?php 
if (!empty($_GET)) {
	echo $_GET['surname'].' '.$_GET['name'].' '.$_GET['surname2'];
}
?>