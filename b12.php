<?php
$numbers = [
 'key1' => 12, 
 'key2' => 30, 
 'key3' => 4, 
 'key4' => -123, 
 'key5' => 1234, 
 'key6' => -12565, 
];
$key[1]=$numbers['key1'];
$key[2]=$numbers['key2'];
$key[3]=$numbers['key3'];
$key[4]=$numbers['key4'];
$key[5]=$numbers['key5'];
$key[6]=$numbers['key6'];
echo "Phan tu dau tien:".$key[1]."<br>";
echo "Phan tu cuoi cung:".$key[6]."<br>";
//b
$min=$max=$key[1];
for($i = 2;$i<=count($numbers);$i++){
    if  ($key[$i]<$min) $min=$key[$i];
}
for($i = 2;$i<=count($numbers);$i++){
    if  ($key[$i]>$max) $max=$key[$i];
}
echo "So lon nhat: ".$max."<br>";
echo "So nho nhat: ".$min."<br>";
//c
// Sắp xếp theo giá trị tăng dần
asort($numbers);
echo "Sap xep theo gia tri tang dan: ";
foreach ($numbers as $key => $value) {
    echo $key . " -> " . $value . " , ";
}
echo "<br>";

// Sắp xếp theo giá trị giảm dần
arsort($numbers);
echo "Sap xep theo gia tri giam dan: ";
foreach ($numbers as $key => $value) {
    echo $key . " -> " . $value . " , ";
}
echo "<br>";
//d
// Sắp xếp theo khóa tăng dần
ksort($numbers);
echo "Sap xep theo key tang dan: ";
foreach ($numbers as $key => $value) {
    echo $key . " -> " . $value . " , ";
}
echo "<br>";

// Sắp xếp theo khóa giảm dần
krsort($numbers);
echo "Sap xep theo key giam dan: ";
foreach ($numbers as $key => $value) {
    echo $key . " -> " . $value . " , ";
}
?>
