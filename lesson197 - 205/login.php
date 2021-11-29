<?php
session_start();

require_once('basic.php');

if (!empty($_POST['password']) and !empty($_POST['login'])) {
	$link = connect(); //подключение к БД
	mysqli_query($link, "SET NAMES 'utf8'");

	$login = $_POST['login'];

	// Получаем юзера по логину и джойним статус:
	$query = "SELECT *, statuses.name as status FROM users LEFT JOIN statuses ON users.status_id=statuses.id WHERE login='$login'";
	$result = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($result);

	if (!empty($user)) {
		$hash = $user['password']; // соленый пароль из БД

		//старый подход
		//$salt = $user['salt']; // соль из БД
		//$password = md5($salt . $_POST['password']);

		//новый подход
		$p = password_verify($_POST['password'], $hash);

		if ($p) {

			if (!empty($user)) {
				$_SESSION['auth'] = true;
				$_SESSION['nameUser'] = $login;
				$_SESSION['id'] = $user['id'];
				$_SESSION['status'] = $user['status'];
				echo "<a href=\"index.php\">Перейти на Главную страницу</a>";
			} else {
				echo "неверно ввел логин или пароль";
			}
		} else {
			echo "Не верный пароль";
		}
	} else {
		echo "Не верный логин";
	}
} else {
?>
	<form action="" method="POST">
		<input name="login">
		<input name="password" type="password">
		<input type="submit">
	</form>
<?php
}
