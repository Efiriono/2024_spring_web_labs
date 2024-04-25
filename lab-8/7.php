<?php
$array = ['a', 'b', 'c', 'b', 'a'];
$isSymmetric = true;
$length = count($array);
for ($i = 0; $i < $length / 2; $i++) {
    if ($array[$i] !== $array[$length - $i - 1]) {
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
