<?php
//$slug   = $params[1];
/*
$slug = $params['slug'];
$query  = "SELECT * FROM pages WHERE slug='$slug'";
	
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page   = mysqli_fetch_assoc($result);
	
return $page;
*/

$catSlug = $params['catSlug'];
$pageSlug = $params['pageSlug'];

$query = "SELECT pages.title, pages.content 
    FROM pages
LEFT JOIN
    categories ON categories.id=pages.category_id
WHERE
    pages.slug='$pageSlug' AND categories.slug='$catSlug'";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$page = mysqli_fetch_assoc($result);

return $page;