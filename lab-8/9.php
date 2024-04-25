<?php
$input = readline("Введите массив символов: ");
$uniqueChars = array_unique(str_split($input));
echo "Массив без повторений: " . implode("", $uniqueChars);
?>
