<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

//187.1 - 2 - 3 - 4
if (!empty($_GET['del'])) {
    $del = $_GET['del'];

    $query = "DELETE FROM users WHERE id=$del";
    mysqli_query($link, $query) or die(mysqli_error($link));
}

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

/*3
echo "<ul>";
foreach ($data as $value) {
    echo "<li>$value[name] <a href=\"?del=$value[id]\">удалить</a></li>";
}
echo "</ul>";
*/

/*4*/
echo "<table><tr><th>id</th><th>name</th><th>age</th><th>salary</th><th>delete</th></tr>";
foreach ($data as $value) {
    echo "<tr>";
        echo "<td>$value[id]</td>";
        echo "<td>$value[name]</td>";
        echo "<td>$value[age]</td>";
        echo "<td>$value[salary]</td>";
        echo "<td><a href=\"?del=$value[id]\">удалить</a></td>";
    echo "</tr>";
}
echo "</table>";