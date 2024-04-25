<?php
$array = ['a', 'b', 'c', 'b', 'a'];
$count = count(array_count_values($array));
echo "Количество различных символов в массиве: $count";
?>
