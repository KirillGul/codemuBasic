<?php
session_start();

$error = '';
$msg = '';
$content = '';

if (!empty($_POST['password']) and !empty($_POST['login'])) {
	$login = $_POST['login'];

	// Получаем юзера по логину и джойним статус:
	$query = "SELECT *, statuses.name as status FROM users LEFT JOIN statuses ON users.status_id=statuses.id WHERE login='$login'";
	$result = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($result);

	if (!empty($user)) {
		$hash = $user['password']; // соленый пароль из БД

		//новый подход
		$p = password_verify($_POST['password'], $hash);

		if ($p) {

			if (!empty($user)) {
				$_SESSION['auth'] = true;
				$_SESSION['nameUser'] = $login;
				$_SESSION['id'] = $user['id'];
				$_SESSION['status'] = $user['status'];
				
				header("Location: ".ADRESS);

			} else {
				$error .= "Неверно введён логин или пароль";
			}
		} else {
			$error .= "Не верный пароль";
		}
	} else {
		$error .= "Не верный логин";
	}
} else {
	$content .= "<form action=\"\" method=\"POST\">"
			."<input name=\"login\">"
			."<input name=\"password\" type=\"password\">"
			."<input type=\"submit\">"
			."</form>";
}

return $page = [
    'error' => $error,
    'msg' => $msg,
    'title' => 'Вход',
    'content' => $content
];
