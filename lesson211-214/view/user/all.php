<?php
$query = "SELECT login FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$content = '';
foreach ($data as $user) {
    $content .= "<div><a href=\"/lesson211-216/user/" . $user['login'] . "\">" . $user['login'] . "</a></div>";
}

$page = [
    'title' => 'список всех пользователей',
    'content' => $content
];

return $page;