<?php
$citySlug = $params['city'];
$countrySlug = $params['country'];

$query = "SELECT city.name, city.population, country.name as countryName FROM city 
            LEFT JOIN country ON country.id = city.country_id WHERE country.slug = '$countrySlug' AND city.slug = '$citySlug'
        ";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$content = '';
foreach ($data as $city) {
    $content .= "<div>
                    Страна: {$city['countryName']}<br>
                    Город: {$city['name']}<br>
                    Население: {$city['population']}
                </div>";
}

$page = [
    'title' => "Информациия про г.{$city['name']}",
    'content' => $content
];

return $page;