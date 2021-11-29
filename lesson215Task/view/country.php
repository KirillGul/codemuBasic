<?php
$countrySlug = $params['country'];

$query = "SELECT city.slug, city.name, country.slug as countrySlug FROM city 
            LEFT JOIN country ON country.id = city.country_id WHERE country.slug = '$countrySlug'
        ";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$content = '';
foreach ($data as $city) {
    $content .= "<div>
                    <a href=\"{$city['countrySlug']}/{$city['slug']}\">{$city['name']}</a>
                </div>";
}

$page = [
    'title' => 'Списко всех городов',
    'content' => $content
];

return $page;