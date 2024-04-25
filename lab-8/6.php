<?php
$X = [1, 3, 5, 7];
$Y = [2, 4, 6, 8];
$Z = array_merge($X, $Y);
sort($Z);
echo "Объединенный массив Z: " . implode(", ", $Z);
?>
