<?php
include 'include.php';

//27.1
$test = 0;
	
if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//27.2
$test = null;
	
if (!isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//27.3
$test = null;
	
if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//27.4
if (!isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//27.5
$test = '';
	
if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//27.6
$test = null;
if (!isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//27.7
$test = false;
	
if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//27.8
$arr = [1, 2, 3, 4, 5];
	
if (isset($arr[5])) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.1
$test = 0;
	
if (empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.2
$test = -1;
	
if (empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.3
$test = '';
	
if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.4
$test = -1;
	
if (empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.5
$test = '0';
	
if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.6
$test = -1;
	
if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.7
$test = null;
	
if (empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.8
$test = false;
	
if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.9
$test = true;
	
if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.10
$test = 'false';
	
if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.11
$test = 'null';
	
if (!empty($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.12
$test = 0;
	
if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.13
$test = null;
	
if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';

//28.14
$test = false;
	
if (isset($test)) {
    echo '+';
} else {
    echo '-';
}
echo '<br>';