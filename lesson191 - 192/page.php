<?php
//191.1
//echo "page.php";

//192.3
if (!isset($_GET['num'])) {
    header('Location: ?num=1');
}

echo $_GET['num'];