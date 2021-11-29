<?php

session_start();

$_SESSION['flash'] = 'сообщение';
header('Location:index.php');