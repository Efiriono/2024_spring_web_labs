<?php
$X = [3, -1, 2, -5, 4, -2];
$negative = [];
$positive = [];
foreach ($X as $num) {
    if ($num < 0) {
        $negative[] = $num;
    } else {
        $positive[] = $num;
    }
}
$X = array_merge($negative, $positive);
echo "Преобразованный массив X: " . implode(", ", $X);
?>
