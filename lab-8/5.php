<?php
$array = [5, 4, 3, 2, 1];
$sortedArray = $array;
rsort($sortedArray);
if ($array === $sortedArray) {
    echo "Массив упорядочен по убыванию.";
} else {
    echo "Массив не упорядочен по убыванию.";
}
?>
