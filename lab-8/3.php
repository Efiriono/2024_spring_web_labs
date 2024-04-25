<?php
$digits = [1, 2, 3, 2, 3, 3, 4, 4, 4, 4];
$counts = array_count_values($digits);
arsort($counts);
$mostCommon = key($counts);
echo "Наиболее часто встречающаяся цифра: $mostCommon";
?>
