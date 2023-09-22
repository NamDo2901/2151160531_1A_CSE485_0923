<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$tong = 0;
for ($i = 0; $i < count($numbers); $i++) {
$tong =$tong+$numbers[$i];
}
$tb = $tong/count($numbers);

echo "Gia tri trung binh = ".$tb."<br> Cac gia tri nho hon trung binh:";
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i]<$tb) echo $numbers[$i]." ";
    }
echo  "<br>Cac gia tri lon hon trung binh:";
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i]>$tb) echo $numbers[$i]." ";
    }
?>