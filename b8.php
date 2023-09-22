<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$min = $max = strlen($array[0]);
$minStr = $maxStr = $array[0];

foreach ($array as $str) {
    $len = strlen($str);
    if ($len > $max) {
        $max = $len;
        $maxStr = $str;
    }
    if ($len < $min) {
        $min = $len;
        $minStr = $str;
    }
}

echo "Chuỗi dài nhất: '{$maxStr}' , độ dài = $max<br>";
echo "Chuỗi ngắn nhất: '{$minStr}' , độ dài = $min<br>";
?>
