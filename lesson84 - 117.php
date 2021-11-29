<?php
include 'include.php';

//84.1
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace('#a.b#', '!', $str);
echo '<br>';

//84.2
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace('#a..b#', '!', $str);
echo '<br>';

//85.1
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab+a#', '!', $str);
echo '<br>';

//85.2
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab*a#', '!', $str);
echo '<br>';

//85.3
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab?a#', '!', $str);
echo '<br>';

//85.4
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab*a#', '!', $str);
echo '<br>';

//86.1
$str = 'ab abab abab abababab abea';
echo preg_replace('#(ab)+#', '!', $str);
echo '<br>';

//87.1
$str = 'a.a aba aea';
echo preg_replace('#a\.b#', '!', $str);
echo '<br>';

//87.2
$str = '2+3 223 2223';
echo preg_replace('#2\+3#', '!', $str);
echo '<br>';

//87.3
$str = '23 2+3 2++3 2+++3 345 567';
echo preg_replace('#2\++3#', '!', $str);
echo '<br>';

//87.4
$str = '23 2+3 2++3 2+++3 445 677';
echo preg_replace('#2\+*3#', '!', $str);
echo '<br>';

//87.5
$str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
echo preg_replace('#\*q*\+#', '!', $str);
echo '<br>';

//87.6
$str = '[abc] {abc} abc (abc) [abc]';
echo preg_replace('#\[...\]#', '!', $str);
echo '<br>';

//88.1
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace('#ab{2,4}a#', '!', $str);
echo '<br>';

//88.2
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace('#ab{1,3}a#', '!', $str);
echo '<br>';

//88.3
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace('#ab{4,}a#', '!', $str);
echo '<br>';

//89.1
$str = 'aba accca azzza wwwwa';
echo preg_replace('#a.+?a#', '!', $str);
echo '<br>';

//90.1
$str = 'a1a a2a a3a a4a a5a aba aca';
echo preg_replace('#a\da#', '!', $str);
echo '<br>';

//90.2
$str = 'a1a a22a a333a a4444a a55555a aba aca';
echo preg_replace('#a\d+a#', '!', $str);
echo '<br>';

//90.3
$str = 'aa a1a a22a a333a a4444a a55555a aba aca';
echo preg_replace('#a\d*a#', '!', $str);
echo '<br>';

//90.4
$str = 'avb a1b a2b a3b a4b a5b abb acb';
echo preg_replace('#a\Db#', '!', $str);
echo '<br>';

//90.5
$str = 'ave a#b a2b a$b a4b a5b a-b acb';
echo preg_replace('#a\Wb#', '!', $str);
echo '<br>';

//90.6
$str = 'ave a#a a2a a$a a4a a5a a-a aca';
echo preg_replace('#\s#', '!', $str);
echo '<br>';

//91.1
$str = 'aba aea aca aza axa';
echo preg_replace('#a[bex]a#', '!', $str);
echo '<br>';

//91.2
$str = 'a1a a3a a7a a9a aba';
echo preg_replace('#a[3-6]a#', '!', $str);
echo '<br>';

//91.3
$str = 'aba aea afa aha aga';
echo preg_replace('#a[a-g]a#', '!', $str);
echo '<br>';

//91.4
$str = 'aba aea afa aha aga';
echo preg_replace('#a[a-fj-z]a#', '!', $str);
echo '<br>';

//91.5
$str = 'aAa aea aEa aJa a3a';
echo preg_replace('#a[a-fA-D]a#', '!', $str);
echo '<br>';

//91.6
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-z]+a#', '!', $str);
echo '<br>';

//91.7
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-zA-Z]+a#', '!', $str);
echo '<br>';

//91.8
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-z0-9]+a#', '!', $str);
echo '<br>';

//92.1
preg_replace('#1[^ex]2#', '!', $str);
echo '<br>';

//92.2
preg_replace('#x[^2-7]z#', '!', $str);
echo '<br>';

//92.3
preg_replace('#x[^A-Z]+z#', '!', $str);
echo '<br>';

//92.4
preg_replace('#x[^A-Za-z1-5]+z#', '!', $str);
echo '<br>';

//93.1
$str = 'wйw wяw wёw wqw';
echo preg_replace('#w[а-яё]w#u', '!', $str);
echo '<br>';

//93.2
$str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
echo preg_replace('#[а-яёА-ЯЁ]+#u', '!', $str);
echo '<br>';

//94.1
$str = 'aba aea aca aza axa a.a a+a a*a';
echo preg_replace('#a[.+*]a#', '!', $str);
echo '<br>';

//94.2
$str = 'xaz x.z x3z x@z x$z xrz';
echo preg_replace('#x[^.@$]z#', '!', $str);
echo '<br>';

//95.1
preg_replace('#[\d.]+#', '!', $str);
echo '<br>';

//95.2
preg_replace('#[^\da-g]{3,7}#', '!', $str);
echo '<br>';

//96.1
$str = 'x[]z x{}z x.z x()z';
echo preg_replace('#x[\[\]{}()]+z#', '!', $str);
echo '<br>';

//96.2
$str = '[abc] {abc} abc (abc) [abc]';
echo preg_replace('#[\[{(].+?[\]})]#', '!', $str);
echo '<br>';

//97.1
$str = '^xx axx ^zz bkk @ss';
echo preg_replace('#[@^].{2,2}#', '!', $str);
echo '<br>';

//97.2
$str = '^xx axx ^zz bkk @ss';
echo preg_replace('#[^\^@]\w{2,2}#', '!', $str);
echo '<br>';

//97.3
$str = '^xx axx ^zz bkk';
echo preg_replace('#[^\^]\w{2,2}#', '!', $str);
echo '<br>';

//98.1
$str = 'xaz xBz xcz x-z x@z';
echo preg_replace('#x[a-zA-Z-]z#', '!', $str);
echo '<br>';

//98.2
$str = 'xaz x$z x-z xcz x+z x%z x*z';
echo preg_replace('#x[$\-+]z#', '!', $str);
echo '<br>';

//99.1
$str = 'abc def xyz';
echo preg_replace('#^abc#', '!', $str);
echo '<br>';

//99.2
$str = 'abc def xyz';
echo preg_replace('#xyz$#', '!', $str);
echo '<br>';

//100.1
$str = 'aeeea aeea aea axa axxa axxxa';
echo preg_replace('#a(e+|x+)a#', '!', $str);
echo '<br>';

//100.2
$str = 'aeeea aeea aea axa axxa axxxa';
echo preg_replace('#a(e{2,2}|x+)a#', '!', $str);
echo '<br>';

//101.1
$str = 'aaa xaa aaa xbb aaa';
echo preg_replace('#\bx[a-z]+\b#', '!', $str);
echo '<br>';

//102.1
echo preg_replace('`а+`', '!', 'строка');
echo '<br>';

//102.2
echo preg_replace('#a\#b#', '!', 'a#b');
echo '<br>';

//103.1
$str = 'a\\b c\\d e\\f';
echo preg_replace('#[a-zA-Z]\\\\[a-zA-Z]#', '!', $str);
echo '<br>';

//103.2
$str = 'a\\b c\\\\d e\\\\\\f';
echo preg_replace('#[a-zA-Z]\\\\+[a-zA-Z]#', '!', $str);
echo '<br>';

//104.1
echo preg_match('#\d{3,3}#', 'eee bbb 33');
echo '<br>';

//104.2
echo preg_match('#^http://#', 'http://eee bbb 33');
echo '<br>';

//104.3
echo preg_match('#^(http://|https://)#', 'https://eee bbb 33');
echo '<br>';

//104.4
echo preg_match('#(txt|html|php)$#', 'https://eee bbb 33');
echo '<br>';

//104.5
echo preg_match('#(jpg|jpeg)$#', 'https://eee bbb 33.jpeg');
echo '<br>';

//105.1
$reg   = '#\d{3,}\/\d{3,}#'; // ваша регулярка
	
$arr[] = 'aaa 123/333 bbb';   // 1
$arr[] = 'aaa 12345 bbb'; // 1
$arr[] = 'aaa 12x bbb';   // 0
$arr[] = 'aaa 12 bbb';    // 0

foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . '<br>';
}
echo '<br>';

//106.1
$reg   = '#^[\w-]+\.\w{2,6}$#'; // ваша регулярка
$arr = [];
	
$arr[] = 'site.ru';          // +
$arr[] = 'site.com';         // +
$arr[] = 'my-site.com';      // +
$arr[] = 'my-cool-site.com'; // +
$arr[] = 'my_site.com';      // +
$arr[] = 'site123.com';      // +
$arr[] = 'site.travel';      // +
$arr[] = 'si$te.com';        // -
$arr[] = 'site.r';           // -

foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . '<br>';
}
echo '<br>';

//106.2
$reg   = '#^[\w-]+@\w+\.\w{2,3}$#'; // ваша регулярка
$arr = [];
	
$arr[] = 'addr@mail.ru';    // +
$arr[] = 'addr123@mail.ru'; // +
$arr[] = 'my-addr@mail.ru'; // +
$arr[] = 'my_addr@mail.ru'; // +
$arr[] = 'addr@site.ru';    // +
$arr[] = 'addr.ru';         // -
$arr[] = 'addr@.ru';        // -
$arr[] = 'my@addr@mail.ru'; // -

foreach ($arr as $str) {
    echo $str . ' ' . preg_match($reg, $str) . '<br>';
}
echo '<br>';

//107.1
$str = '2025-12-31';
$reg   = '#^(\d{4,4})-(\d{2,2})-(\d{2,2})$#'; // ваша регулярка
preg_match($reg, $str, $res);
echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//107.2
$str = 'index.html';
$reg   = '#^([a-z]+)\.([a-z]+)$#'; // ваша регулярка
preg_match($reg, $str, $res);
echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//108.1
$str = '11 22 333';
$reg   = '#\d+#'; // ваша регулярка
echo preg_match_all($reg, $str);
//echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//108.2
$str = '2023-10-29 2024-11-30 2025-12-31';
$reg   = '#(\d{4,4})-(\d{2,2})-(\d{2,2})#'; // ваша регулярка
preg_match_all($reg, $str, $res);
echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//108.3
$str = '2023-10-29 2024-11-30 2025-12-31';
$reg   = '#(\d{4,4})-(\d{2,2})-(\d{2,2})#'; // ваша регулярка
preg_match_all($reg, $str, $res, PREG_SET_ORDER);
echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//109.1
$str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
$reg   = '#(\w+)(?:\$@)+(\w+)#'; // ваша регулярка
preg_match_all($reg, $str, $res);
echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//110.1
$str = '12 34 56 78';
echo preg_replace('#([0-9])([0-9])#', '$2$1',$str);
echo '<br>';

//110.2
$str = '31.12.2025';
echo preg_replace('#([0-9]+)\.([0-9]+)\.([0-9]+)#', '$3.$2.$1',$str);
echo '<br>';

//111.1
$str = 'aaa bbb ccc xyz';
echo preg_replace('#(\w)\1\1#', '!',$str);
echo '<br>';

//111.2
$str = 'a aa aaa abab bbbb';
echo preg_replace('#(\w)\1{1,}#', '!',$str);
echo '<br>';

//111.3
$str = 'aaa aaa bbb bbb ccc ddd';
echo preg_replace('#([a-z]+)\s\1#', '!',$str);
echo '<br>';

//112.1
$str = '12:59:59';
$res = [];
preg_match('#(?<hours>\d{2}):(?<min>\d{2}):(?<sec>\d{2})#', $str, $res);
echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//112.2
$str = '12:59:59';
$res = [];
preg_match('#(?<hours>\d{2}):(?<min>\d{2}):(?<sec>\d{2})#', $str, $res);
$arr = delNumArr($res);
echo '<pre>'; print_r($arr); echo '</pre>';

function delNumArr($res) {
    foreach ($res as $key=>$value) {
        if (!is_string($key)) {
            unset($res[$key]);
        }

    }
    return $res;
}
echo '<br>';

//112.3 - ???
$str = '12:59:59 12:59:12 09:45:09';
echo preg_replace('#(?<hours>\d+):\d{2}:\g<hours>#', '!',$str);
//preg_match('#(?<hours>\d+):\d{2}:\g<hours>#', $str, $res);
//echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//113.1
$arr = [
    '31-12-2025',
    '30-11-1995',
    '29-10-1990',
];

$arrR = [];
$reg   = '#(\d{2})-(\d{2})-(?|19(9\d)|20(\d\d))#'; // ваша регулярка
foreach ($arr as $str) {
    preg_match($reg, $str, $res);
    $arrR[] = $res;
}

echo '<pre>'; print_r($arrR); echo '</pre>';
echo '<br>';

//114.1
$str = 'func1() func2() func3()';
preg_match_all('#func(?=(\d)+)#', $str, $res);
echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//114.2
$str = '<a href="" class="eee" id="zzz">';
preg_match_all('#\s(.+?)(?=\=")#', $str, $res);
echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//114.3
$str = '$aaa $bbb $ccc';
preg_match_all('#(?<=\$)[a-z]+#', $str, $res);
echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//115.1
$str = '11 22 33';
$res = preg_replace_callback('#(\d+)#', function($match) {
    //return '!';
    return $match[1] * 2;
}, $str);
echo $res;
//echo '<pre>'; print_r($res); echo '</pre>';
echo '<br>';

//116.1
echo preg_replace('#[a-z]+#i', '!', 'aaa BBB');
echo '<br>';

//116.2
echo preg_replace('#[a-z]+#Uu', '!', 'aaa bbb');
echo '<br>';

//116.3
echo preg_replace('#[a-z]+#Xx', '!', 'aaa bbb');
echo '<br>';

//116.4
echo preg_replace('#[а-яё]+#ui', '!', 'яяя ЙЙЙ ёёё');
echo '<br>';