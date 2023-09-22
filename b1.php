<?php
$arrs = [2,5,6,9,2,5,6,12,5];
$tong = array_sum($arrs);
$tich = array_product($arrs);
$hieu = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $hieu = $hieu-$arrs[$i];
}
$thuong = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
    $thuong = $thuong/$arrs[$i];
}
echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $tong . "<br>";
echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $tich . "<br>";
echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $hieu . "<br>";
echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $thuong . "<br>";
?>
