<?php
$inputX = readline("Введите первый массив через пробел: ");
$inputY = readline("Введите второй массив через пробел: ");
$X = explode(" ", $inputX);
$Y = explode(" ", $inputY);
$filteredX = array_diff($X, $Y);
$minValue = min($filteredX);
echo "Наименьший элемент первого массива, не входящий во второй: $minValue";
?>
