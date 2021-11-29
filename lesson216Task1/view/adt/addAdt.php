<?php 
$content = '';

if (!empty($_SESSION['auth'])) { 
    $content .= "Добавить объявление:"
            ."<table>"
            ."<form action=\"\" method=\"POST\">"
            ."<tr>"
                ."<td>Заголовок:</td>"
                ."<td><input name=\"heading\"></td>"
            ."</tr>"
            ."<tr>"
                ."<td>Техт объявления:</td>"
                ."<td><input name=\"text\"></td>"
            ."</tr>"
            ."<tr>"
                ."<td rowspace=\"2\"><input type=\"submit\"></td>"
            ."</tr>"
        ."</form>"
    ."</table>";

    if (!empty($_POST)) {
        $heading = $_POST['heading'];
        $text = $_POST['text'];
        $previev = substr($_POST['text'], 0, 250);
        $dateReg = time();
        $catSlug = $params['catSlug'];

        $query = "INSERT INTO advert (headingAdvert, textAdvert, previewAdvert, dateAdvert, slugCat, idStatus) VALUES ('$heading', '$text', '$previev', '$dateReg', '$catSlug', 1)";
        mysqli_query($link, $query);
    }

    $page = [
        'title' => 'Добавление объявления - ',
        'content' => $content
    ];
    
    return $page;
} else {
    header("Location: ".ADRESS);
}
