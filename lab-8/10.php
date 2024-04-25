<?php
$input = readline("Введите массив символов: ");
$uniqueChars = array_unique(str_split($input));
$count = count($uniqueChars);
echo "Количество различных символов в массиве: $count";
?>
