<?php
$numbers = readline("Введите числа через пробел: ");
$numbersArray = explode(" ", $numbers);
sort($numbersArray);
echo "Элементы массива в порядке возрастания: " . implode(" ", $numbersArray);
?>
