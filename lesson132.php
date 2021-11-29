<?php
include 'include.php';

//132.1 - 2
?>
<form action="" method="GET">
    Отзыв: <textarea name="text"><?= $_GET['text'] ?? '' ?></textarea>
    <input type="submit">
</form>

<?php
if (!empty($_GET['text'])) {
    echo "Транслит введенного текста:<br>";
    echo implode('', getTranslit($_GET['text']));
}

function getTranslit ($str) {
    $arrTranslit = [];
    $arr = ['а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 
       'д'=>'d', 'е'=>'e', 'ё'=>'e', 'ж'=>'zh', 'з'=>'z', 
       'и'=>'i', 'й'=>'i', 'к'=>'k', 'л'=>'l', 'м'=>'m', 
       'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 
       'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'kh', 'ц'=>'ts', 
       'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shch', 'ъ'=>'ie', 'ы'=>'y', 
       'ь'=>'', 'э'=>'e', 'ю'=>'iu', 'я'=>'ia'];
 
    $strArr = explode(' ', $str);
    foreach ($strArr as $strStr) {
        $strTranslit = '';
        foreach (preg_split("//u", $strStr) as $value) {
            if (!empty($value))
                $strTranslit .= $arr[$value]; 
        }
        $arrTranslit[] = $strTranslit; 
    }
    return $arrTranslit;
}
?>