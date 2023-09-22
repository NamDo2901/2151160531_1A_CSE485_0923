<?php
$arrs=['a','b','ABC'];
$arr0 = ['1', 'b', 'c', 'd'];
$arr1 = ['a', 0, null, false];
for ($i=0;$i<count($arrs);$i=$i+1){
    $arrs[$i]=strtoupper($arrs[$i]);
}
for ($i=0;$i<count($arr0);$i=$i+1){
    $arr0[$i]=strtoupper($arr0[$i]);
}
for ($i=0;$i<count($arr1);$i=$i+1){
    $arr1[$i]=strtoupper($arr1[$i]);
}
var_dump($arrs);
echo "<br>";
var_dump($arr0);
echo "<br>";
var_dump($arr1);
?> 