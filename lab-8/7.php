<?php
$input = readline("Введите массив символов: ");
$isSymmetric = true;
$length = strlen($input);
for ($i = 0; $i < $length / 2; $i++) {
    if ($input[$i] !== $input[$length - $i - 1]) {
        $isSymmetric = false;
        break;
    }
}
if ($isSymmetric) {
    echo "Массив симметричен.";
} else {
    echo "Массив не симметричен.";
}
?>
