<?php
$input = readline("Введите массив чисел через пробел: ");
$array = explode(" ", $input);
$isDescending = true;
for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$i] < $array[$i + 1]) {
        $isDescending = false;
        break;
    }
}
if ($isDescending) {
    echo "Массив упорядочен по убыванию.";
} else {
    echo "Массив не упорядочен по убыванию.";
}
?>
