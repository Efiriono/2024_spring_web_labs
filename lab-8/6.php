<?php
$inputX = readline("Введите массив X через пробел: ");
$inputY = readline("Введите массив Y через пробел: ");
$X = explode(" ", $inputX);
$Y = explode(" ", $inputY);
$Z = array_merge($X, $Y);
sort($Z);
echo "Объединенный массив: " . implode(", ", $Z);
?>
