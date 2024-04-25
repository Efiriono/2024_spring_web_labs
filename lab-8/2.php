<?php
$rows = readline("Введите количество строк: ");
$cols = readline("Введите количество столбцов: ");
$array = [];
for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $array[$i][$j] = readline("Введите элемент [$i][$j]: ");
    }
}
echo "Введенный двумерный массив: \n";
foreach ($array as $row) {
    echo implode(" ", $row) . "\n";
}
?>
