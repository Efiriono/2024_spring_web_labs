<?php
$input = readline("Введите массив цифр через пробел: ");
$array = explode(" ", $input);
$counts = array_count_values($array);
arsort($counts);
$mostCommon = key($counts);
echo "Наиболее часто встречающаяся цифра: $mostCommon";
?>
