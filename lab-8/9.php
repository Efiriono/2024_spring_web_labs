<?php
$array = ['a', 'b', 'c', 'b', 'a'];
$unique = array_unique($array);
echo "Массив без повторений: " . implode(", ", $unique);
?>
