<?php
$content = '';
$advertID = $params['advertID'];

if (isset($_SESSION['auth']) and $_SESSION['auth'] == true) {
    $content .= "<a href=\"".ADRESS."/cat/$catSlug/add\">Разместить объявление</a><br>";
}

$query = "SELECT advert.id, advert.headingAdvert, advert.textAdvert, advert.dateAdvert FROM advert WHERE advert.id='$advertID'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

foreach ($data as $pageOne) {
    $content .= '
        <div>
            <p>'.$pageOne['id'].' - <span>'.$pageOne['dateAdvert'].'</span></p>
            <p>'.$pageOne['headingAdvert'].'</p>
            <p>'.$pageOne['textAdvert'].'</p>
        </div>';        
}

$page = [
    'title' => 'Объявления - ' . $pageOne['headingAdvert'],
    'content' => $content
];

return $page;
