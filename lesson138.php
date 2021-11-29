<?php
include 'include.php';

//138.1
echo "Задача 1<br>---------------<br>";
?>
<form action="" method="GET">
    Введите температуру в гр.Цельсия: <input name="celc">
    <input type="submit">
</form>

<?php
if (isset($_GET['celc'])) {
    echo 'Температура по Фаренгейту: '.$_GET['celc'] * (9/5) + 32;
}

//138.2
echo "Задача 2<br>---------------<br>";
?>
<form action="" method="GET">
    Введите число: <input name="fact">
    <input type="submit">
</form>

<?php
if (isset($_GET['fact'])) {
    echo 'Факториал числа: '.$_GET['fact'].'; равен: '.factorial($_GET['fact']);
}

function factorial ($num) {
    return array_product(range(1, $num));
}

//138.3
echo "Задача 3<br>---------------<br>";
?>
<form action="" method="GET">
    Введите число (выведу делители числа): <input name="int">
    <input type="submit">
</form>

<?php
if (isset($_GET['int'])) {
    echo 'Делители числа: '.$_GET['int'].'; равны: '.implode(' ', getDivisors($_GET['int']));
}

function getDivisors ($num) {
    $arr = [];
    $i = 1;
    while ($num >= $i) {
        if ($num % $i == 0) {
            $arr[] = $i;
        }
        $i++;
    }

    return $arr;
}

//138.4
echo "Задача 4<br>---------------<br>";
?>
<form action="" method="GET">
    Введите число 1: <input name="int1">
    Введите число 2: <input name="int2">
    <input type="submit">
</form>

<?php
if (isset($_GET['int1']) and isset($_GET['int2'])) {
    echo 'Общие делители чисел: '.$_GET['int1'].' и '.$_GET['int2'].'; равны: '.implode(' ', array_intersect(getDivisors($_GET['int1']), getDivisors($_GET['int2'])));
}


//138.5
echo "Задача 5<br>---------------<br>";
?>
<form action="" method="GET">
    Введите число a: <input name="a">
    Введите число b: <input name="b">
    Введите число c: <input name="c">
    <input type="submit">
</form>

<?php
if (!empty($_GET['a']) and !empty($_GET['b']) and !empty($_GET['c'])) {
    $result = getSqrtKvadrUravneniya($_GET['a'], $_GET['b'], $_GET['c']);
    if ($result)
        echo $result;
    else
        echo 'Не корней';
}

function getSqrtKvadrUravneniya($a, $b, $c) {
    $d = pow($b, 2) - 4 * $a * $c;

    if ($d < 0) {
        return false;
    } elseif ($d == 0) {
        return -($b / (2 * $a));
    } else {
        $x = (-$b + sqrt($d)) / 2 * $a;
        return $x;
    }
}

//138.6
echo "<br>Задача 6<br>---------------<br>";
?>
<form action="" method="GET">
    Введите число a: <input name="integer1">
    Введите число b: <input name="integer2">
    Введите число c: <input name="integer3">
    <input type="submit">
</form>

<?php
if (!empty($_GET['integer1']) and !empty($_GET['integer2']) and !empty($_GET['integer3'])) {
    $arr = [
        $_GET['integer1'], 
        $_GET['integer2'], 
        $_GET['integer3']
    ];

    rsort($arr);
    if (pow($arr[0], 2) > (pow($arr[1], 2) + pow($arr[2], 2))) {
        echo "Эти числа являются тройкой Пифагора";
    } else {
        echo "Нет";
    }
}

//138.7
echo "<br>Задача 7<br>---------------<br>";
?>
<form action="" method="GET">
    Введите дату рождения в формате (01.12.1990): <input name="rdat">
    <input type="submit">
</form>

<?php
if (!empty($_GET['rdat'])) {
    $arrRdat = explode('.', $_GET['rdat']);
    if (time() < mktime(0,0,0, $arrRdat[1], $arrRdat[0])) {
        echo floor((mktime(23,59,59, $arrRdat[1], $arrRdat[0]) - time()) / 60 / 60 / 24);
    } else {
        $yearNew = date('Y', time());
        echo (365 - date('z', time())) + date('z', mktime(0,0,0, $arrRdat[1], $arrRdat[0], $yearNew)) - 1;
    }
}

//138.8
echo "<br>Задача 8<br>---------------<br>";
?>
<form action="" method="GET">
    <textarea name="text8"></textarea>
    <input type="submit">
</form>

<?php
if (isset($_GET['text8'])) {
    $arrStr = str_split($_GET['text8']);
    echo "Кол-во символов: ".count(str_split($_GET['text8']));
    echo "<br>";
    echo "Кол-во слов: ".count(explode(" ", $_GET['text8']));
}

//138.9
echo "<br>Задача 9<br>---------------<br>";
?>
<form action="" method="GET">
    <textarea name="text9"></textarea>
    <input type="submit">
</form>

<?php
if (isset($_GET['text9'])) {
    $arrStr = countSymbol($_GET['text9']);
    $count = count(str_split($_GET['text9']));
    foreach ($arrStr as $key=>$value) {
        echo $key.' = '.round(($value / $count) * 100).'%';
        echo "<br>";
    }

}

function countSymbol($text) {
    $arrStr = str_split($text);
    return array_count_values($arrStr);
}

//138.10
echo "<br>Задача 10<br>---------------<br>";
$month = ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
$week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
?>
<form action="" method="GET">
    <select name='day'>
<?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option>$i</option>";
        }
?>
    </select>
    <select name='month'>
<?php
        foreach ($month as $value) {
            echo "<option>$value</option>";
        }
?>
    </select>
    <select name='year'>
<?php
        for ($i = 1990; $i <= 2025; $i++) {
            echo "<option>$i</option>";
        }
?>
    </select>
    <input type="submit">
</form>

<?php

if (isset($_GET['day']) and isset($_GET['month']) and isset($_GET['year'])) {
    $getMonth = array_search($_GET['month'], $month); //возвращает ключ найденного значения
    echo $week[date ('w', mktime(24,0,0, $getMonth, $_GET['day'], $_GET['year']))];
}

//138.11
echo "<br>Задача 10<br>---------------<br>";
$arrGoroskop = [
    'Aries' => ['Все хорошо Овен', 'Все очень хорошо Овен'],
    'Taurus' => ['Все хорошо Телец', 'Все очень хорошо Телец'],
    'Gemini' => ['Все хорошо Близнецы', 'Все очень хорошо Близнецы'],
    'Cancer' => ['Все хорошо Рак', 'Все очень хорошо Рак'],
    'Leo' => ['Все хорошо Лев', 'Все очень хорошо Лев'],
    'Virgo' => ['Все хорошо Дева', 'Все очень хорошо Дева'],
    'Libra' => ['Все хорошо Весы', 'Все очень хорошо Весы'],
    'Scorpio' => ['Все хорошо Скорпион', 'Все очень хорошо Скорпион'],
    'Sagittarius' => ['Все хорошо Стрелец', 'Все очень хорошо Стрелец'],
    'Capricorn' => ['Все хорошо Козерог', 'Все очень хорошо Козерог'],
    'Aquarius' => ['Все хорошо Водолей', 'Все очень хорошо Водолей'],
    'Pisces' => ['Все хорошо Рыбы', 'Все очень хорошо Рыбы'],
];
?>

<form action="" method="GET">
    Введите дату рождения в формате (dd.mm.yyyy): <input name="rdat">
    <input type="submit">
</form>

<?php
if (isset($_GET['rdat'])) {
    $rdatStr = explode('.', $_GET['rdat']);
    $timeshtampRdat = mktime(0,0,0,$rdatStr[1],$rdatStr[0]);

    if ($timeshtampRdat >= mktime(0,0,0,3,21) and $timeshtampRdat <= mktime(0,0,0,4,19)) {
        $zodiak = 'Aries';
    } elseif ($timeshtampRdat >= mktime(0,0,0,4,20) and $timeshtampRdat <= mktime(0,0,0,5,20)) {
        $zodiak = 'Taurus';
    } elseif ($timeshtampRdat >= mktime(0,0,0,5,21) and $timeshtampRdat <= mktime(0,0,0,6,21)) {
        $zodiak = 'Gemini';
    } elseif ($timeshtampRdat >= mktime(0,0,0,6,22) and $timeshtampRdat <= mktime(0,0,0,7,22)) {
        $zodiak = 'Cancer';
    } elseif ($timeshtampRdat >= mktime(0,0,0,7,23) and $timeshtampRdat <= mktime(0,0,0,8,22)) {
        $zodiak = 'Leo';
    } elseif ($timeshtampRdat >= mktime(0,0,0,8,23) and $timeshtampRdat <= mktime(0,0,0,9,22)) {
        $zodiak = 'Virgo';
    } elseif ($timeshtampRdat >= mktime(0,0,0,9,23) and $timeshtampRdat <= mktime(0,0,0,10,23)) {
        $zodiak = 'Libra';
    } elseif ($timeshtampRdat >= mktime(0,0,0,10,24) and $timeshtampRdat <= mktime(0,0,0,11,22)) {
        $zodiak = 'Scorpio';
    } elseif ($timeshtampRdat >= mktime(0,0,0,11,23) and $timeshtampRdat <= mktime(0,0,0,12,21)) {
        $zodiak = 'Sagittarius';
    } elseif ($timeshtampRdat >= mktime(0,0,0,12,22) and $timeshtampRdat <= mktime(0,0,0,1,20)) {
        $zodiak = 'Capricorn';
    } elseif ($timeshtampRdat >= mktime(0,0,0,1,21) and $timeshtampRdat <= mktime(0,0,0,2,18)) {
        $zodiak = 'Aquarius';
    } elseif ($timeshtampRdat >= mktime(0,0,0,2,19) and $timeshtampRdat <= mktime(0,0,0,3,20)) {
        $zodiak = 'Pisces';
    }

    echo "Завтра по $zodiak ожидает {$arrGoroskop[$zodiak][0]}<br>";
    echo "После завтра по $zodiak ожидает {$arrGoroskop[$zodiak][1]}<br>";
}