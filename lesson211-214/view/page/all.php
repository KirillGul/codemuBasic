<?php
$query = "SELECT pages.slug as slug, pages.title as title, categories.slug as catslug FROM pages LEFT JOIN categories ON categories.id = pages.category_id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$content = '';
foreach ($data as $page) {
    $content .= '
        <div>
            <a href="/lesson211-216/page/'  .  $page['catslug'] . '/' . $page['slug'] . '">' . $page['title'] . '</a>
        </div>
    ';
}

$page = [
    'title' => 'список всех страниц',
    'content' => $content
];

return $page;