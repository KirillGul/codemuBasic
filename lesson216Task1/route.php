<?php
if (preg_match("#^/$#", $url)) $page = include('view/main.php');

if (preg_match("#/(registration)#", $url)) $page = include('view/users/registration.php');

if (preg_match("#/^(login)#", $url)) $page = include('view/users/login.php');

if (preg_match("#/(logout)#", $url)) $page = include('view/users/logout.php');

if (preg_match("#/(admin)#", $url)) $page = include('view/users/admin.php');

if (preg_match("#/(profile)#", $url)) $page = include('view/users/profile.php');

if (preg_match("#/(delAccaunt)#", $url)) $page = include('view/users/delAccaunt.php');

if (preg_match("#/(updateStatus)#", $url)) $page = include('view/users/updateStatus.php');

if (preg_match("#/(add)#", $url)) $page = include('view/adt/add.php');

if (preg_match("#/cat/(?<catSlug>[a-z0-9_-]+)$#", $url, $params)) $page = include('view/adt/category.php');

if (preg_match("#/cat/(?<catSlug>[a-z0-9_-]+)/(?<advertID>[a-z0-9_-]+)#", $url, $params)) $page = include('view/adt/advert.php');

if (preg_match("#/cat/(?<catSlug>[a-z0-9_-]+)/(add)#", $url, $params)) $page = include('view/adt/addAdt.php');
