<?php
$content = '';

$query = "SELECT * FROM rubric";
$result = mysqli_query($link, $query);
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

foreach ($data as $value) {
    $content .= "<a href=\"".ADRESS."/cat/{$value['slug']}\">{$value['name']}</a><br>";
}

return $page = [
    'content' => $content
];
