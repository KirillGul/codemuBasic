<?php
session_start();

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$nameDB = 'mydb';      // имя базы данных

if (!empty($_POST)) {
    
    $link = mysqli_connect($host, $user, $pass, $nameDB);
    mysqli_query($link, "SET NAMES 'utf8'");

    $query = "INSERT INTO users SET";
    $flag = 0;

    if (isset($_POST['name']) and preg_match('#\w+#', $_POST['name'])) {
        $flag = 1;
        $name = $_POST['name'];
        $query .= " name='$name',";
    } else {
        $flag = 0;
    }

    if (isset($_POST['age']) and preg_match('#\d+#', $_POST['age'])) {
        $flag = 1;
        $age = $_POST['age'];
        $query .= " age='$age',";        
    } else {
        $flag = 0;
    }

    if (isset($_POST['salary']) and preg_match('#\d+#', $_POST['salary'])) {
        $flag = 1;
        $salary = $_POST['salary'];
        $query .= " salary='$salary'";
    } else {
        $flag = 0;
    }

    if ($flag == 1) {
        mysqli_query($link, $query) or die(mysqli_error($link));

        $_SESSION['flash'] = 'форма успешно сохранена';
        header('Location: form.php'); //избавление от двойного сохранения после отправки 
    } else {
        echo $_SESSION['flash'] = 'форма не прошла валидацию';
    }

} elseif (!empty($_SESSION['flash'])) {
    echo $_SESSION['flash'];
    unset($_SESSION['flash']);
}

//186.1-2
?>
<form action="form.php" method="POST">
	<input name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
	<input name="age" value="<?php if (isset($_POST['age'])) echo $_POST['age']; ?>">
    <input name="salary" value="<?php if (isset($_POST['name'])) echo $_POST['salary']; ?>">
	<input type="submit">
</form>