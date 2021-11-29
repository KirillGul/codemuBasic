<?php

//145.1
if (!isset($_COOKIE['timeUser'])) {
    setcookie('timeUser', time());
} else {
    echo "С момента первого посещения страницы прошло:".time() - $_COOKIE['timeUser'];
}