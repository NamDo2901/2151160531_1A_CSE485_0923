<?php
$arrs=[0,1,2,3,4,5];
for ($i=0;$i<count($arrs);$i=$i+1){
    if($i==3) unset($arrs[$i]);
}
var_dump($arrs);
?> 