<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
echo "<table border =1>";
echo "<tr><td>"."Tên khóa học";
foreach ($arrs as $arr) {
    echo "<tr><td>" . $arr . "</td></tr>";
}
echo "</table>";
?>
