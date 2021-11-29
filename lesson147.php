<?php

//147.1
setcookie('cookYear10', '', time());
var_dump($_COOKIE['cookYear10']);

//147.2
if (isset($_COOKIE['cookYear'])) {
    setcookie('cookYear', '', time());
    unset($_COOKIE['cookYear']);
}

var_dump($_COOKIE['cookYear']);
var_dump($_COOKIE);