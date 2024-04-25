<?php
$input = readline("Введите массив чисел через пробел: ");
$array = explode(" ", $input);
$negatives = [];
$positives = [];
foreach ($array as $value) {
    if ($value < 0) {
        $negatives[] = $value;
    } else {
        $positives[] = $value;
    }
}
$transformedArray = array_merge($negatives, $positives);
echo "Преобразованный массив: " . implode(", ", $transformedArray);
?>
