<?php session_start();

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

if (!isset($_POST['login']) and !isset($_POST['password'])) {
?>
    <form method="POST">
        <input name="login">
        <input name="password" type="password">
        <input type="submit">
    </form>

<?php
} else {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $data = mysqli_fetch_assoc($result);

    if (!empty($data)) {
        $_SESSION['flash'] = 'Успешная авторизация';
        header("Location: index.php");
    } else {
        echo "Не верно ввел логин или пароль";
?>
        <form method="POST">
            <input name="login">
            <input name="password" type="password">
            <input type="submit">
        </form>
<?php
    }
}