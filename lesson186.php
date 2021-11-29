<meta charset="utf-8">
<?php
include 'include.php';

$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных

$link = mysqli_connect($host, $user, $pass, $name);
mysqli_query($link, "SET NAMES 'utf8'");

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

//186.1
$result = '';

foreach ($data as $value) {
    $result .= "<div>";
    
    $result .= "<h2>".$value['name']."</h2>";
    $result .= "<p>".$value['age']." years, <b>".$value['salary']."$</b></p>";

    $result .= "</div>";
}

echo $result;

//186.2
$result = '<table><tr><th>id</th><th>name</th><th>age</th><th>salary</th></tr>';
foreach ($data as $value) {
    $result .= "<tr>";
    
    $result .= "<th>".$value['id']."</th>";
    $result .= "<th>".$value['name']."</th>";
    $result .= "<th>".$value['age']."</th>";
    $result .= "<th>".$value['salary']."</th>";

    $result .= "</tr>";
}
$result .= '</table>';

echo $result;

//186.3
$result = '<ul>';
foreach ($data as $value) {
    $result .= "<li>".$value['name']."</li>";

}
$result .= '</ul>';

echo $result;