<?php
$a = ['a' => [ 'b' => 0, 'c' => 1 ], 'b' => [ 'e' => 2, 'o' => [ 'b' => 3 ] ]];

// Lấy giá trị = 3 mà có key là b
$value_b = $a['b']['o']['b']."<br>";
echo $value_b; // Kết quả: 3

// Lấy giá trị = 1 mà có key là c
$value_c = $a['a']['c']."<br>";
echo $value_c; // Kết quả: 1

// Lấy thông tin của phần tử có key là a
$info_a = $a['a'];
print_r($info_a); // Kết quả: Array ( [b] => 0 [c] => 1 )
?>
