<?php
$content = '';
$catSlug = $params['catSlug'];

if (isset($_SESSION['auth']) and $_SESSION['auth'] == true) {
    $content .= "<a href=\"".ADRESS."/cat/$catSlug/add\">Разместить объявление</a><br>";
}

$query = "SELECT advert.id, advert.headingAdvert, advert.previewAdvert, rubric.slug as rubric_slug FROM advert LEFT JOIN rubric ON rubric.slug=advert.slugCat WHERE rubric.slug='$catSlug'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

foreach ($data as $pageOne) {
    $content .= '
        <div>
            <a href="' .ADRESS .'/cat/'. $catSlug . '/'  . $pageOne['id'] . '">' . $pageOne['headingAdvert'] . '</a>
            <p>'.$pageOne['previewAdvert'].'</p>
        </div>';        
}

//$_SESSION['rubric_slug'] = $catSlug;

$page = [
    'title' => 'Все объявления рубрики - ' . $catSlug,
    'content' => $content
];

return $page;
