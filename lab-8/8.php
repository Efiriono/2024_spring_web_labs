<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];
$diff = array_diff($array1, $array2);
$min = min($diff);
echo "Наименьший элемент из первого массива, не входящий во второй: $min";
?>
